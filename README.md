# AlFakhamah_Restaurant

مشروع موقع مطعم (PHP + static assets).

## خطوات رفع المشروع إلى GitHub (مقترح)

1. افتح موجه الأوامر في مجلد المشروع:

```bash
cd c:/xampp/htdocs/ProSowary/AlFakhamah_Restaurant
```

2. إنشـاء مستودع Git محلي وإضافة الملفات:

```bash
git init
git add .
git commit -m "Initial commit"
```

3. إنشـاء مستودع على GitHub:
- إما من خلال الويب: https://github.com/new
- أو باستخدام GitHub CLI (مسبق التثبيت):

```bash
gh repo create USERNAME/REPO_NAME --public --source=. --remote=origin
```

4. رفع الكود إلى الـ remote:

```bash
git push -u origin main
# أو إن كان الفرع الافتراضي master
# git push -u origin master
```

## ملاحظات تشغيل محلي
- ضع المجلد داخل `htdocs` في XAMPP أو شغِّل الخادم من مسار المشروع.
- افتح: `http://localhost/AlFakhamah_Restaurant/frontend/index.php` أو حسب مسار المشروع.

---

أخبرني إذا تود أن أقوم بالخطوات نيابةً عنك (أستطيع تشغيل `git init` وتهيئة commit، ويمكنني أيضاً إنشاء المستودع على GitHub إذا زوَّدتني بصلاحية `gh` أو بيانات الوصول).