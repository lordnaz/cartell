@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product List - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-product-list.js'
])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  Product List
</h4>

<!-- Product List Table -->
<div class="card">
  
  <div class="card-datatable table-responsive">
    <table class="datatables-products table">
      <thead class="border-top">
        <tr>
          <th></th>
          <th></th>
          <th>product</th>
          <th>category</th>
          <th>stock</th>
          <th>sku</th>
          <th>price</th>
          <th>qty</th>
          <th>status</th>
          <th>actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection
