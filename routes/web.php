<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductListComponent;
use App\Http\Livewire\AddProductComponent;
use App\Http\Livewire\CategoryListComponent;
use App\Http\Livewire\AddCategoryComponent;
use App\Http\Livewire\BrandListComponent;
use App\Http\Livewire\AddBrandComponent;
use App\Http\Livewire\PrintBarcodeComponent;
use App\Http\Livewire\SalesListComponent;
use App\Http\Livewire\POSComponent;
use App\Http\Livewire\NewSalesComponent;
use App\Http\Livewire\SalesReturnComponent;
use App\Http\Livewire\NewSalesReturnComponent;
use App\Http\Livewire\PurchaseListComponent;
use App\Http\Livewire\AddPurchaseComponent;
use App\Http\Livewire\ExpenseListComponent;
use App\Http\Livewire\AddExpenseComponent;
use App\Http\Livewire\QuotationListComponent;

use App\Http\Livewire\AddQuotationComponent;
use App\Http\Livewire\TransferListComponent;
use App\Http\Livewire\AddTransferComponent;
use App\Http\Livewire\CreateSalesReturnListComponent;
use App\Http\Livewire\PurchaseReturnListComponent;
use App\Http\Livewire\SalesReturnListComponent;
use App\Http\Livewire\AddPurchaseReturnComponent;
use App\Http\Livewire\AddStoreComponent;
use App\Http\Livewire\StoreListComponent;
use App\Http\Livewire\AddSupplierComponent;
use App\Http\Livewire\SupplierListComponent;
use App\Http\Livewire\AddCustomerComponent;
use App\Http\Livewire\AddUserComponent;
use App\Http\Livewire\CustomerListComponent;

use App\Http\Livewire\NewCountryComponent;
use App\Http\Livewire\CountryListComponent;
use App\Http\Livewire\NewStateComponent;
use App\Http\Livewire\StateListComponent;
use App\Http\Livewire\ChatComponent;
use App\Http\Livewire\CalenderComponent;
use App\Http\Livewire\EmailComponent;

use App\Http\Livewire\PurchaseOrderReportComponent;
use App\Http\Livewire\InventoryReportComponent;
use App\Http\Livewire\InvoiceReportComponent;
use App\Http\Livewire\SalesReportComponent;
use App\Http\Livewire\PurchaseReportComponent;
use App\Http\Livewire\SupplierReportComponent;
use App\Http\Livewire\CustomerReportComponent;

use App\Http\Livewire\NewUserComponent;
use App\Http\Livewire\UsersListComponent;

use App\Http\Livewire\GroupSettingsComponent;
use App\Http\Livewire\GroupPermissionsComponent;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth','verified')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product/list',ProductListComponent::class)->name('product.list');
    Route::get('/add/product',AddProductComponent::class)->name('add.product');
    Route::get('/category/list',CategoryListComponent::class)->name('category.list');
    Route::get('/add/category',AddCategoryComponent::class)->name('add.category');
    Route::get('/brand/list',BrandListComponent::class)->name('brand.list');
    Route::get('/add/brand',AddBrandComponent::class)->name('add.brand');
    Route::get('/print/barcode',PrintBarcodeComponent::class)->name('print.barcode');
    Route::get('/sales/list',SalesListComponent::class)->name('sales.list');
    Route::get('/pos',POSComponent::class)->name('pos');
    Route::get('/new/sales',NewSalesComponent::class)->name('new.sales');
    Route::get('/sales/return',SalesReturnComponent::class)->name('sales.return');
    Route::get('/newsales/return',NewSalesReturnComponent::class)->name('newsales.return');
    Route::get('/purchase/list',PurchaseListComponent::class)->name('purchase.list');
    Route::get('/add/purchase',AddPurchaseComponent::class)->name('add.purchase');
    Route::get('/expense/list',ExpenseListComponent::class)->name('expense.list');
    Route::get('/add/expense',AddExpenseComponent::class)->name('add.expense');
    Route::get('/quotation/list',QuotationListComponent::class)->name('quotation.list');
    Route::get('/Add/Quotation',AddQuotationComponent::class)->name('add.quotation');
    Route::get('/Transfer/List',TransferListComponent::class)->name('transfer.list');
    Route::get('/Add/Transfer',AddTransferComponent::class)->name('add.transfer');
    Route::get('/Salesreturn/List',SalesReturnListComponent::class)->name('salesreturn.list');
    Route::get('/CreateSalesReturn/List',CreateSalesReturnListComponent::class)->name('createsalesreturn.list');
    Route::get('/PurchaseReturn/List',PurchaseReturnListComponent::class)->name('purchasereturn.list');
    Route::get('/AddPurchase/ReturnList',AddPurchaseReturnComponent::class)->name('addpurchasereturn.list');
    Route::get('/Add/Store',AddStoreComponent::class)->name('add.store');
    Route::get('/Store/List',StoreListComponent::class)->name('store.list');
    Route::get('/Add/Supplier',AddSupplierComponent::class)->name('add.supplier');
    Route::get('/Supplier/List',SupplierListComponent::class)->name('supplier.list');
    Route::get('/Add/User',AddUserComponent::class)->name('add.user');
    Route::get('/Add/Customer',AddCustomerComponent::class)->name('add.customer');
    Route::get('/Customer/List',CustomerListComponent::class)->name('customer.list');
    Route::get('/New/Country',NewCountryComponent::class)->name('new.country');
    Route::get('/Country/List',CountryListComponent::class)->name('country.list');
    Route::get('/New/State',NewStateComponent::class)->name('new.state');
    Route::get('/State/List',StateListComponent::class)->name('state.list');
    Route::get('/Chat',ChatComponent::class)->name('chat');
    Route::get('/Calender',CalenderComponent::class)->name('calender');
    Route::get('/Email',EmailComponent::class)->name('email');
    Route::get('/PurchaseOrder/Report',PurchaseOrderReportComponent::class)->name('purchaseorder.report');
    Route::get('/Inventory/Report',InventoryReportComponent::class)->name('inventory.report');
    Route::get('/Invoice/Report',InvoiceReportComponent::class)->name('invoice.report');
    Route::get('/Sales/List',SalesListComponent::class)->name('sales.list');
    Route::get('/Purchase/Report',PurchaseReportComponent::class)->name('purchase.report');
    Route::get('/Supplier/Report',SupplierReportComponent::class)->name('supplier.report');
    Route::get('/Customer/Report',CustomerReportComponent::class)->name('customer.report');
    Route::get('/New/User',NewUserComponent::class)->name('new.user');
    Route::get('/Users/List',UsersListComponent::class)->name('users.list');
    Route::get('/Group/Settings',GroupSettingsComponent::class)->name('group.settings');
    Route::get('/Group/Permissions',GroupPermissionsComponent::class)->name('group.permissions');





});

require __DIR__.'/auth.php';
