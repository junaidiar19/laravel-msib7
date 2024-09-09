<?php

/**
 * Fungsi untuk menghitung increment dari penomoran pagination
 */
function increment($data, $loop)
{
  return $data->firstItem() + $loop->index;
}

/**
 * Fungsi untuk mengubah text menjadi huruf besar.
 */
function hurufBesar(string $value): string
{
  return str()->upper($value);
}
