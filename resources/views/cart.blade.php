@extends('layouts.frontend')
@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__title">
                    <h3>Cart</h3>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="color__blue">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-end -->

<!-- cart-area -->
<div class="cartarea sp_bottom_100 sp_top_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cartarea__table__content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cartItems as $item)
                            <tr>
                                <td class="cartarea__product__thumbnail">
                                

                                        <img src="{{ Storage::url($item->product->image) ? Storage::url($item->product->image) : asset('assets/frontend/img/grid/grid_1.png') }}"
                                             alt="{{ $item->product->name }}" width="80">
                                    </a>
                                </td>
                                <td class="cartarea__product__name">
                                    <a href="#">{{ $item->product->name }}</a>
                                </td>
                                <td class="cartarea__product__price__cart">
                                    <span class="amount">
                                        Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="cartarea__product__quantity">
                                    <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group">
                                            <input type="number" name="qty" value="{{ $item->qty }}"
                                                   max="{{ $item->product->stock }}" style="max-width: 70px;"
                                                   class="form-control" />
                                            <button type="submit"
                                                    class="btn btn-success btn-sm ml-2">Update</button>
                                        </div>
                                    </form>
                                </td>
                                <td class="cartarea__product__subtotal">
                                    Rp {{ number_format($item->qty * $item->product->price, 0, ',', '.') }}
                                </td>
                                <td class="cartarea__product__remove">
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                                          onsubmit="return confirm('Hapus item ini dari keranjang?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Keranjang masih kosong.</td>
                            </tr>
                            @endforelse
                        </tbody>
                        @php
                            $total = $cartItems->sum(fn($item) => $item->qty * $item->product->price);
                        @endphp
                        <tfoot>
                            <tr>
                                <th class="text-center" colspan="5">Total</th>
                                <th class="text-center">
                                    Rp {{ number_format($total, 0, ',', '.') }}
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Continue Shopping -->
        <div class="row">
            <div class="col-lg-12">
                <div class="cartarea__shipping__wrapper">
                    <div class="cartarea__shipping__update">
                        <a class="default__button" href="{{ route('cart.checkout') }}">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
