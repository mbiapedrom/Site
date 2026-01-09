<?php

// 1) Ler ?lang=en/pt/es/... da query string
$lang_code = $_GET['lang'] ?? 'en';

// 2) Lista de idiomas que vais suportar
$idiomas_validos = ['en', 'pt', 'es', 'fr', 'it', 'de', 'bg', 'cs', 'hr', 'da', 'et', 'fi', 'el', 'hu', 'ga', 'lv', 'lt', 'mt', 'nl', 'ro', 'sk', 'sl', 'sv'];

if (!in_array($lang_code, $idiomas_validos)) {
  $lang_code = 'en'; // fallback
}

// 3) Carregar o ficheiro JSON certo
$locale_file  = __DIR__ . "/../locales/$lang_code.json";
$default_file = __DIR__ . "/../locales/en.json";

if (!file_exists($locale_file)) {
  $locale_file = $default_file;
}

$data = file_get_contents($locale_file);
$dict = json_decode($data, true);
if (!is_array($dict)) {
  $dict = [];
}

// 4) Função de tradução
function t(string $key, ?string $fallback = null): string {
  global $dict;
  if (isset($dict[$key])) {
    return $dict[$key];
  }
  // se não houver tradução, devolve o fallback ou a própria key
  if ($fallback !== null) return $fallback;
  return $key;
}
