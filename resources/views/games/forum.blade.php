@csrf

<strong>Name: <x-text-input type="text" name="naam" field="naam" placeholder="Name..." class="w-full border-black" autocomplete="off" :value="$game->naam"></x-text-input> </strong> <br> <br>
@error('naam')
<p class="text-red-500 -mt-6">{{ $message }}</p>
@enderror

<strong>Beschrijving: <x-text-input type="text" name="beschrijving" field="naam" placeholder="Beschrijving..." class="w-full border-black" autocomplete="off" :value="$game->beschrijving"></x-text-input> </strong> <br> <br>

<strong>Foto: <x-text-input type="text" name="foto" field="naam" placeholder="Foto..." class="w-full border-black" autocomplete="off" :value="$game->foto"></x-text-input> </strong> <br> <br>

<strong>Device:
    <select name="tag_id" class="w-full rounded" autocomplete="off">
        <option value="">Select a Device</option>
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}" {{ $game->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->naam }}</option>
        @endforeach
    </select>
</strong> <br> <br>



