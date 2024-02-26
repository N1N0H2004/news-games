    @csrf

    <strong>Title: <x-text-input type="text" name="titel" field="titel" placeholder="Title..." class="w-full border-black" autocomplete="off" :value="$artikel->titel"></x-text-input> </strong> <br> <br>
    @error('title')
    <p class="text-red-500 -mt-6">{{ $message }}</p>
    @enderror

    <strong>Description:  <x-text-input type="text" name="inhoud" field="inhoud" placeholder="Description..." class="w-full border-black" autocomplete="off" :value="$artikel->inhoud"></x-text-input> </strong> <br> <br>

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


    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Add news</button>
    <a href="{{ route('artikels.index', $artikel->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>

