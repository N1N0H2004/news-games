        @csrf

        <strong>Name: </strong><x-text-input type="text" name="naam" field="naam" placeholder="Name..." class="w-full border-black" autocomplete="off" :value="$game->naam"></x-text-input>
        @error('naam')
        <p class="text-red-500 -mt-6">{{ $message }}</p>
        @enderror
<br><br>
        <strong>Description: </strong><textarea type="text" name="beschrijving" field="naam" placeholder="Beschrijving..." class="w-full rounded-md min-h-44 max-h-80 border-black" autocomplete="off">{{ $game->beschrijving }}</textarea>
<br><br>
        <strong>Device: </strong>
            <select name="tag_id" class="w-full rounded" autocomplete="off">
                <option value="">Select a Device</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $game->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->naam }}</option>
            @endforeach
            </select>
<br><br>
        <strong>Picture: </strong><x-text-input type="file" name="foto" field="foto" class="w-full" style="background-color: white; color: black;" required >{{ $game->foto }}</x-text-input>
<br><br>
