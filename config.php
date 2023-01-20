<?php

// session_start();
require "autoload.php";
define("CONSUMER_KEY", "6qWFU1UUtLzwnhEtaKAy3kYR4");
define("CONSUMER_SECRET", "tJBlHqpRsniJcuEX8kiiZrNDhsIExC11qHoqvMjOFsCUCZ8mdA");
define("OAUTH_TOKEN", "1353541609011384321-0X3cOt13BEf3hFxhDmjXT4K1Z4VU6F");
define("OAUTH_TOKEN_SECRET", "E5j8u5V2ELYjJVtgzPgD8QMnljWxoPIKYphbomDsJ59jK");
//define("OAUTH_CALLBACK", ""); //callback url, isi jika dibutuhkan. (optional)
define("WEBHOOK_URL", "https://webgfriend.000webhostapp.com/twitter/webhook.php"); //https://domain-kamu.com/twitter/webhook.php
define("ENV_LABEL", "cardyarea"); //Dev environment label

define("TRIGGER_WORD", "svtgf!", "cardy!");
define("ADMIN_ID", ["965702083", "", ""]); //User ID Admin (optional)
define("MINIMAL_FOLLOWERS", "0");
define("SLEEP_TIME", "15"); //delay ketika post tweet (detik)

define("TRIGGER_OFF", "off"); //tambahkan kata off di bio maka bot akan nonaktif

define("ALERT_NOT_FOLLOW", "[BOT] kamu belum follow base ini");
define("ALERT_NOT_FOLLBACK", "[BOT] kamu belum difollback, tunggu sesi open follback berikutnya");
define("ALERT_MINIMAL_FOLLOWERS", "[BOT] followers kamu minimal " . MINIMAL_FOLLOWERS . " untuk ngirim menfess");
define("ALERT_ERROR_UNSEND", "[BOT] terjadi kegagalan! hubungi admin untuk unsend manual");
define("ALERT_DOUBLE_UNSEND", "[BOT] kan tadi udah dihapus. Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_NOT_SENDER", "[BOT] kamu bukan sendernya");
define("ALERT_UNSEND", "[BOT] menfess kamu sudah berhasil dihapus! Ketik /unsend [url_menfess] untuk unsend menfess berbentuk thread");
define("ALERT_OFF", "[BOT] bot sedang off, coba dilain waktu ya");
define("ALERT_BADWORDS", "[BOT] ada kata yang dilarang");
define("ALERT_TRIGGER", "[BOT] gunakan kata " . TRIGGER_WORD . " untuk ngirim menfess");

define("WELCOME_MESSAGE", "[BOT] yeay kamu sudah difollback! baca rules terlebih dahulu sebelum ngirim menfess yaa");
define("PROCESSED_MESSAGE", "[BOT] wait! menfess kamu sedang diproses");
define("DECLINED_MESSAGE", "[BOT] menfess kamu batal dikirim");

define("SUCCESS_ALERT", "[BOT] Menfess kamu berhasil terkirim. Ketik /unsend untuk batal mengirim");
define("QUESTION_QUICKREP", "[BOT] pastikan sudah membaca rules, yakin mau ngirim menfess?");

define("OPTION_SATU", trim(html_entity_decode('&#x1f436;')) . "Yup");
define('DESCRIPTION_SATU', 'Lanjut mengirim menfess');

define("OPTION_DUA", trim(html_entity_decode('&#x1f431;')) . "Nope");
define("DESCRIPTION_DUA", "Batal mengirim menfess");

define("BADWORDS_LIST", ["asu", "anjing", "memek", "kontol", "ewean", "bajingan", "goblog", "goblok", "setan", "pantek", "fwb", "pepek", "lonte", "ewe"]);

if (!CONSUMER_KEY || !CONSUMER_SECRET || !WEBHOOK_URL || !ENV_LABEL) {
    echo 'CONSUMER_KEY, CONSUMER_SECRET, WEBHOOK_URL, and ENV_LABEL variables must be set';
}
