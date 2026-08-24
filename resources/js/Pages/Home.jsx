import GameCard from '@/Components/GameCard';

export default function Home({ title = 'Steam Library Tracker', games }) {
    function fetchGames() {
    //     TODO: make a button here to fetch the current user's games. Upsert?
    }
    return (
        <main style={{ padding: '2rem', fontFamily: 'sans-serif' }}>
            <h1>{title}</h1>
            <h2>Fetch your Games</h2>
            <input type="button" value="Click Click" onClick={fetchGames} />
            <ul>
                {games?.map((game) => (
                    <GameCard game={game}/>
                ))}
            </ul>
        </main>
    );
}
