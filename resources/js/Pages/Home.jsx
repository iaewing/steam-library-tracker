import GameCard from '@/Components/GameCard';
import { useState } from 'react';
import { router } from '@inertiajs/react';

export default function Home({ title = 'Steam Library Tracker', games, filters }) {
    const [selectedSort, setSelectedSort] = useState(`${filters.sort}_${filters.direction}`);

    const handleSortChange = (event) => {
        const value = event.target.value;
        setSelectedSort(value);

        const [sort, direction] = value.split(':');

        router.get(
            route('home'),
            { sort, direction },
            {
                preserveState: true,
                replace: true,
                only: ['games', 'filters'],
            }
        );
    };

    function fetchGames() {
    //     TODO: make a button here to fetch the current user's games. Upsert?
    }

    return (
        <main className="p-8">
            <h1>{title}</h1>
            <h2>Fetch your Games</h2>
            <input type="button" value="Click Click" onClick={fetchGames} />

            <div className="mb-4">
                <label htmlFor="sort" className="mr-2 font-medium">Sort By:</label>
                <select
                    id="sort"
                    value={selectedSort}
                    onChange={handleSortChange}
                    className="border rounded p-2"
                >
                    <option value="name:asc">Name: A to Z</option>
                    <option value="name:desc">Name: Z to A</option>
                    <option value="completed:desc">Completed</option>
                    <option value="completed:asc">Not Completed</option>
                    <option value="playtime_forever:desc">Playtime: Desc</option>
                    <option value="playtime_forever:asc">Playtime: Asc</option>
                </select>
            </div>

            <div className="gap-4 grid grid-cols-2">
                {games?.map((game) => (
                    <div className="col-span-1">
                        <GameCard game={game} />
                    </div>
                ))}
            </div>
        </main>
    );
}
