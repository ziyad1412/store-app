<?php

if (!function_exists('formatRupiah')) {
    /**
     * Format number to Rupiah
     *
     * @param int $number
     * @return string
     */
    function formatRupiah($number)
    {
        return 'Rp' . number_format($number, 0, ',', '.');
    }
}
