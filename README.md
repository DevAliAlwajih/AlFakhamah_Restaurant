# AlFakhamah_Restaurant

مشروع موقع لمطعم — تطبيق ويب بسيط مبني بـ PHP مع ملفات ثابتة للواجهة.

محتوى المشروع (نظرة عامة)
- الواجهة الأمامية: مجلد `frontend/` يحتوي صفحات PHP لعرض القوائم، الحجز، والاتصال.
- الموارد الثابتة: `assets/` يحتوي CSS، JavaScript، و`images/`.
- الخادم والوظائف: `backend/` يحتوي ملفات معالجة مثل `db.php`, `login.php`, `order.php`, `reserve.php`, `subscribe.php`.
- لوحة الإدارة: `backend/admin/` حيث توجد صفحات لإدارة المنتجات والمحتوى.
- نسخة قاعدة البيانات: `DataSet/` تحتوي ملف SQL (استيراد عند الإعداد).

المتطلبات (محليًا)
- XAMPP أو أي بيئة تشغيل PHP + MySQL (PHP 7.4+ أو أحدث توصية).
- phpMyAdmin أو أداة أخرى لاستيراد ملف SQL.

خطوات التشغيل محليًا
1. ضع المجلد داخل مجلد الخادم المحلي (مثال: `C:/xampp/htdocs/AlFakhamah_Restaurant`).
2. شغِّل Apache وMySQL عبر XAMPP.
3. أنشئ قاعدة بيانات جديدة في phpMyAdmin (مثال: `fakhamah_db`).
4. استورد ملف SQL الموجود في `DataSet/` (مثل `fakhamah .sql`) إلى القاعدة التي أنشأتها.
5. افتح وحرِّر ملف الاتصال بقاعدة البيانات `backend/db.php` وضبط اسم القاعدة واسم المستخدم وكلمة المرور:

```php
// مثال: backend/db.php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'fakhamah_db';
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
```

6. افتح المتصفح وادخل العنوان المناسب، مثلاً:

```
http://localhost/AlFakhamah_Restaurant/frontend/index.php
```

ملحوظات مهمة
- إن كان هناك ملفات تخص إعدادات محلية أو كلمات مرور (مثل ملفات `.env` أو إعدادات قاعدة البيانات)، لا ترفعها إلى مستودع عام. قم بتحديث `.gitignore` لتجاهل الملفات الحساسة.
- مسار الصور المرفوعة موجود في `assets/images/uploads/` وقد تم إضافة هذا المسار في `.gitignore` افتراضياً.

رفع المشروع إلى GitHub (مقترح مختصر)
1. افتح Terminal داخل مجلد المشروع:

```bash
cd C:/xampp/htdocs/ProSowary/AlFakhamah_Restaurant
```
2. إنشـاء المستودع محلياً (إذا لم يتم بعد):

```bash
git init
git add .
git commit -m "Initial commit"
```
3. أنشئ مستودعًا على GitHub عبر الويب أو استخدم GitHub CLI:

```bash
gh repo create YOUR_USERNAME/REPO_NAME --public --source=. --remote=origin
```
4. ادفع التغييرات:

```bash
git push -u origin main
```
.
