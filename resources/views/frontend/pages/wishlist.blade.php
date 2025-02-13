<x-frontend-app-layout :title="'Terms and Condition || DiscountZShop'">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <h2 class="text-center">Your Wish List</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead>
                                <tr class="">
                                    <th scope="col" style="background: #eee">Sl</th>
                                    <th scope="col" style="background: #eee">Image</th>
                                    <th scope="col" style="background: #eee">Offer Name</th>
                                    <th scope="col" class="" style="background: #eee">Action</th>
                                </tr>
                            </thead>

                            {{-- @dd($wishlists) --}}
                            {{-- <tbody id="wishlist"> --}}

                            <tbody>
                                @forelse ($wishlists as $wishlist)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/' . $wishlist->options->image) }}"
                                                width="50px" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ route('offer.details', $wishlist->options->slug) }}">
                                                {{ $wishlist->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('wishlist.remove', $wishlist->rowId) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="background: none; border: none; cursor: pointer;">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Your wishlist is empty.</td>
                                    </tr>
                                @endforelse
                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
