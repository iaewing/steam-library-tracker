import GameCard from '@/Components/GameCard';

export default function Home({ title = 'Steam Library Tracker', games }) {
    function fetchGames() {
    //     TODO: make a button here to fetch the current user's games. Upsert?
    }
    return (
        <main className="p-8">
            <h1>{title}</h1>
            <h2>Fetch your Games</h2>
            <input type="button" value="Click Click" onClick={fetchGames} />
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
