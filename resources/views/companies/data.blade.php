
Route::get('/company', [HomeController::class, 'index']);

Route::post('create', [HomeController::class, 'store'])->name('create-test');
Route::get('create-data', [HomeController::class, 'add'])->name('create-data');

Route::get('/', function () {
    return view('companies.welcome');
});

//index file
<!-- <td><a href="{{ route('update/ ' . $comp->id) }}">edit</a></td> --><!-- <td><a href="{{ route('update/ ' . $comp->id) }}">edit</a></td> -->