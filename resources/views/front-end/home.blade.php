@extends('layouts.app')
@section('main')
<div class="m-auto bg-white p-10 rounded-lg mt-5 w-1/2">
   @if (session('message'))
   <h3 class="text-lg rounded-md font-semibold bg-yellow-300 text-black py-3 px-5 mt-5">{{session('message')}}</h3>
   @endif
    <form action="{{route('items')}}" method="POST">
        @csrf
        <div class="flex gap-2 mt-5">
            <input class="px-5 py-2 outline-none border rounded-sm" name="full_name" type="text" placeholder="Full Name">
            <input class="px-5 py-2 outline-none border rounded-sm" name="phone_numer" type="tel" placeholder="Phone Number">
            <input class="px-5 py-2 outline-none border rounded-sm" name="email" type="email" placeholder="Email">
        </div>
        <div class="flex gap-2 mt-5">
            <input class="px-5 py-2 outline-none border rounded-sm" name="form_zip" type="text" placeholder="Form Zip Code">
            <input class="px-5 py-2 outline-none border rounded-sm" name="to_zip" type="text" placeholder="To Zip Code">
            <input class="px-5 py-2 outline-none border rounded-sm" name="delivery_date" type="date" placeholder="Delivery Date">
        </div>
            <select class="px-5 py-2 outline-none border rounded-sm" name="move_size">
                <option value="Studio">Studio</option>
                <option value="One_Bedroom">One Bedroom</option>
                <option value="Two_Bedroom">Two Bedroom</option>
                <option value="Three_Bedroom">Three Bedroom</option>
                <option value="Four_Bedroom">Four Bedroom</option>
                <option value="Five_Bedroom">Five Bedroom</option>
                <option value="Six_Bedroom_and_more">Six Bedroom And More</option>
            </select>

        <button class="px-5 bg-yellow-300 rounded-lg py-2 border mt-5" type="submit">Get Quote</button>
    </form>
</div>
@endsection
