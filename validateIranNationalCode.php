<?php

function validateIranNationalCode($nationalCode) {
    // چک کردن اینکه ورودی فقط عدد باشه و ۱۰ رقم باشه
    if (!preg_match('/^\d{10}$/', $nationalCode)) {
        return false;
    }

    // چک کردن کدهای تکراری یا همه صفر
    if (preg_match('/^(\d)\1{9}$/', $nationalCode)) {
        return false;
    }

    $sum = 0;
    // محاسبه مجموع ضرب‌ها برای ۹ رقم اول
    for ($i = 0; $i < 9; $i++) {
        $sum += (int)$nationalCode[$i] * (10 - $i);
    }

    $remainder = $sum % 11;
    $checkDigit = (int)$nationalCode[9]; // رقم آخر (کنترلی)

    // اعتبارسنجی رقم کنترلی
    if ($remainder < 2) {
        return $checkDigit === $remainder;
    } else {
        return $checkDigit === (11 - $remainder);
    }
}

?>