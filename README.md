# AlFakhamah_Restaurant 

 # مشروع موقع لمطعم
## – تطبيق ويب بسيط مبني باستخدام PHP و MySQL

## 📌 وصف المشروع (بالعامية)
هذا مشروع لموقع مطعم بسيط، يتيح للزائر يشوف قائمة الأكلات، يحجز طاولة، ويتواصل مع المطعم.
وفيه لوحة تحكم للمدير يقدر من خلالها يضيف ويعدل المنتجات ويتابع الحجوزات والاشتراكات.
المشروع شغال على أي سيرفر محلي مثل XAMPP أو WAMP، وكل الملفات مرتبة بين الواجهة الأمامية والخلفية وقاعدة البيانات.

## 📌 Project Description (English – Simple)
This is a simple restaurant website built with PHP and MySQL.
It allows users to view the menu, make table reservations, and contact the restaurant.
The admin panel provides tools to manage products, reservations, and content.
The project runs on any local server environment such as XAMPP or WAMP.

## 📁 محتوى المشروع
frontend/ — صفحات PHP لعرض الواجهة (القائمة، الحجز، التواصل).

assets/ — ملفات CSS و JavaScript والصور.

backend/ — ملفات المعالجة مثل:
db.php, login.php, order.php, reserve.php, subscribe.php

backend/admin/ — لوحة الإدارة لإدارة المنتجات والمحتوى.

DataSet/ — ملف SQL جاهز للاستيراد.
(مأخوذ من المحتوى الأصلي في الصفحة الحالية) 

🛠 المتطلبات
XAMPP أو أي بيئة PHP + MySQL (يفضل PHP 7.4+).

phpMyAdmin لاستيراد قاعدة البيانات.
(مذكور في الصفحة الحالية) 

## ▶️ خطوات التشغيل محليًا
ضع المشروع داخل مجلد السيرفر المحلي:
C:/xampp/htdocs/AlFakhamah_Restaurant

شغّل Apache و MySQL.

أنشئ قاعدة بيانات جديدة (مثال: fakhamah_db).

استورد ملف SQL من مجلد DataSet/.

عدّل بيانات الاتصال في backend/db.php:

## php
-- $db_host = 'localhost';
-- $db_user = 'root';
-- $db_pass = '';
-- $db_name = 'fakhamah_db';
-- $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


افتح الموقع عبر المتصفح:

كتابة تعليمات برمجية
http://localhost/AlFakhamah_Restaurant/frontend/index.php
 
