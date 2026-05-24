# UTS Laravel Digital Bisnis (24.12.3123)

## Checklist implementasi (4 Soal)

### Soal 1: CRUD Kategori (Admin)

- [x] Buat `app/Http/Controllers/Admin/CategoryController.php` untuk index/create/store/edit/update/destroy

- [ ] Buat view:
    - [ ] `resources/views/admin/categories/index.blade.php` (tabel + search)
    - [ ] `resources/views/admin/categories/create.blade.php` (form create)
    - [ ] `resources/views/admin/categories/edit.blade.php` (form edit)
- [ ] Tambah route admin kategori di `routes/web.php` (CRUD + delete via DELETE)
- [ ] Pastikan tombol Edit/Delete berjalan (gunakan form method DELETE/PUT)

### Soal 2: CRUD Partner (Admin)

- [ ] Pastikan `Partner` punya full CRUD: create/read/update/delete
- [ ] Tambah view `resources/views/admin/partners/edit.blade.php`
- [x] Update `PartnerController` dengan method `edit/update/destroy`
- [x] Perbarui view `resources/views/admin/partners/index.blade.php` (tambah tombol Edit/Delete)

- [ ] Update route `routes/web.php` untuk PUT/PATCH & DELETE partner
- [x] Perbarui view `resources/views/admin/partners/index.blade.php` (tambah tombol Edit/Delete)

### Soal 3: Search Basic (Admin Partner & Kategori)

- [ ] Tambah form search di index partner dan index kategori
- [ ] Modifikasi query di `PartnerController@index` dengan `where('name','LIKE',...)`
- [ ] Modifikasi query di `CategoryController@index` dengan `where('name','LIKE',...)`

### Soal 4: Render Partner ke Homepage `/`

- [ ] Modifikasi `HomeController@index` agar ambil `Partner` dan meneruskan ke `welcome.blade.php`
- [ ] Perbarui `resources/views/welcome.blade.php` agar looping menampilkan grid/list partner

### GitHub

- [ ] Checkout branch `ujian-tengah-semester-24.12.3123`
- [ ] `git add . && git commit -m ... && git push origin ujian-tengah-semester-24.12.3123`
- [ ] Cek `php artisan migrate` & validasi UI di browser
