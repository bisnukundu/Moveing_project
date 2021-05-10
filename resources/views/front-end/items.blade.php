@extends('layouts.app')
@section('main')

<form action="{{route('sendMail')}}" method="POST">
    @csrf
    {{-- hidding  --}}
    <input value="{{$data['form_zip']}}" class="px-5 py-2 border rounded-sm" name="form_zip" type="hidden"
        placeholder="Form Zip Code">
    <input value="{{$data['to_zip']}}" class="px-5 py-2 border rounded-sm" name="to_zip" type="hidden"
        placeholder="To Zip Code">
    <input value="{{$data['delivery_date']}}" class="px-5 py-hidden2 border rounded-sm" name="delivery_date"
        type="hidden" placeholder="Delivery Date">
    <input value="{{$data['full_name']}}" class="px-5 py-2 border rounded-sm" name="full_name" type="hidden"
        placeholder="Full Name">
    <input value="{{$data['phone_numer']}}" class="px-5 py-2 border rounded-sm" name="phone_numer" type="hidden"
        placeholder="Phone Number">
    <input value="{{$data['email']}}" class="px-5 py-2 border rounded-sm" name="email" type="hidden"
        placeholder="Email">

    {{-- hidding  --}}


    <div class="grid p-5 rounded-lg bg-white justify-center align-middle grid-cols-5 gap-5">
        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline mb-3" src="https://www.imoving.com/media/1228/sofa-resized.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Sofa</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="sofa">
                <option value="4 Seat">4 Seat</option>
                <option value="Loveseat">Loveseat</option>
                <option value="3 Seat / Sofa Bed">3 Seat / Sofa Bed</option>
                <option value="Sofa bed">Sofa bed</option>
            </select>
        </div>
        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1124/1161-tv.png" alt="?">
            <h3 class="text-xl font-semibold my-2">TV</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="tv">
                <option value=" LCD/LED 46' to 60'"> LCD/LED 32" to 46"</option>
                <option value=" LCD/LED 46' to 60'"> LCD/LED 46" to 60"</option>
                <option value="LCD/LED Over 60">LCD/LED Over 60"/option>
                <option value="DLP TV">3 Seat / Sofa Bed</option>
                <option value="Tv Console">Tv Console</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1001/couch.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Arm Chair</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Arm_Chair">
                <option value="Chaise Long">Rocking</option>
                <option value="Chaise Long">Chaise Long</option>
                <option value="Overstuffed">Overstuffed</option>
                <option value="Lounge">Lounge</option>
                <option value="Recliner">Recliner</option>
                <option value="Papasan">Papasan</option>
                <option value="Beanbag">Beanbag</option>
                <option value="Rocking">Rocking</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1301/table-lounge.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Lounge Table</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Lounge_Table">
                <option value="Coffee Table">Coffee Table</option>
                <option value="Drum">Drum</option>
                <option value="Lamp">Lamp</option>
                <option value="Occasional">Occasional</option>
                <option value="Side">Side</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1043/lamp.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Lamp</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Lamp">
                <option value="Lamp">Lamp</option>
                <option value="Coffee Table">Coffee Table</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1369/tv-stand.png" alt="?">
            <h3 class="text-xl font-semibold my-2">TV Stand</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="TV_Stand">
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Small">Small</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1327/end-table.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Table End</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Table_End">
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Small">Small</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1413/item_sectionalsofa-copy-2.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Sectional Sofa</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Sectional_Sofa">
                <option value="2 Pieces">2 Pieces</option>
                <option value="3 Pieces">3 Pieces</option>
                <option value="4 Pieces">4 Pieces</option>
                <option value="5 Pieces">5 Pieces</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1425/glass-launch-table.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Glass Lounge Table</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none"
                name="Glass_Lounge_Table">
                <option value="Drum">Drum</option>
                <option value="Lamp">Lamp</option>
                <option value="Occasional">Occasional</option>
                <option value="Side">Side</option>
                <option value="Sofa">Sofa</option>
                <option value="Telephone">Telephone</option>
                <option value="Tea Cart">Tea Cart</option>
                <option value="Nesting Table">Nesting Table</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1181/1382-rug.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Rug</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Rug">
                <option value="8' X 10'">8' X 10'</option>
                <option value="9' X 12'">9' X 12'</option>
                <option value="10' X 12'">10' X 12'</option>
                <option value="12' X 15'">12' X 15'</option>
                <option value="15' X 18'">15' X 18'</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1212/picture-poster-painting.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Picture / Poster / Painting</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none"
                name="Picture_Poster_Painting">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1371/ottoman.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Ottoman</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Ottoman">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1199/bookcase.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Bookcase</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Bookcase">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
        </div>

        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1103/1096-mirror.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Mirror</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Mirror">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
        </div>
        <div class="border  shadow-md text-center px-5 py-10">
            <img class="inline" src="https://www.imoving.com/media/1366/dresser.png" alt="?">
            <h3 class="text-xl font-semibold my-2">Dresser</h3>
            <select class="px-5 shadow-sm w-full text-center py-1 border rounded-md outline-none" name="Dresser">
                <option value="Chest Of Drw / Single">Chest Of Drw / Single</option>
                <option value="Triple">Triple</option>
                <option value="Bureau">Bureau</option>
                <option value="Double">Double</option>
                <option value="Child">Child</option>
            </select>
        </div>
    </div>
    <button class="px-9 w-full bg-yellow-300 text-lg mt-3 shadow-md font-extrabold py-2 border rounded-md" type="submit">Submit</button>
</form>
@endsection
