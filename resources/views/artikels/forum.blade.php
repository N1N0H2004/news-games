@csrf

<strong>Title: <x-text-input type="text" name="titel" field="titel" placeholder="Title..." class="w-full border-black" autocomplete="off" :value="$artikel->titel"></x-text-input> </strong> <br> <br>
    @error('title')
    <p class="text-red-500 -mt-6">{{ $message }}</p>
    @enderror

    <strong>Description: <textarea type="text" name="inhoud" field="inhoud" placeholder="Description..." class="w-full min-h-44 max-h-80 border-black" autocomplete="off">{{ $artikel->inhoud }}</textarea> </strong> <br> <br>

    <strong>Device:
        <select name="tag_id" class="w-full rounded" autocomplete="off">
            <option value="">Select a Device</option>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ $artikel->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->naam }}</option>
            @endforeach
        </select>
    </strong> <br> <br>

    <strong>Game:
        <select name="game_id" class="w-full rounded" autocomplete="off">
            <option value="">Select a Game</option>
            @foreach($games as $game)
                <option value="{{ $game->id }}" {{ $artikel->game_id == $game->id ? 'selected' : '' }}>{{ $game->naam }}</option>
            @endforeach
        </select>
    </strong> <br> <br>

    <strong>Categorie:
        <select name="categorie_id" class="w-full rounded" autocomplete="off">
            <option value="">Select a Game</option>
            @foreach($categories as $categorie)
                <option value="{{ $categorie->id }}" {{ $artikel->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->naam }}</option>
            @endforeach
        </select>
    </strong> <br> <br>

    <strong>Photo:
        <select name="photo_id" class="w-full rounded" autocomplete="off">
            <option value="">Select a Photo</option>
            @foreach($photos as $photo)
                <option value="{{ $photo->id }}" {{ $artikel->photo_id == $photo->id ? 'selected' : '' }}>{{ $photo->foto }}</option>
            @endforeach
        </select>
    </strong> <br> <br>


