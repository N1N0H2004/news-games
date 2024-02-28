@csrf

<strong>Name: </strong><x-text-input type="text" name="naam" field="naam" placeholder="Name..." class="w-full border-black" autocomplete="off" :value="$categorie->naam"></x-text-input> <br> <br>
@error('naam')
<p class="text-red-500 -mt-6">{{ $message }}</p>
@enderror





