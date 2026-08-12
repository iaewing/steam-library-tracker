export default function Home({ title = 'Steam Library Tracker', games }) {
    return (
        <main style={{ padding: '2rem', fontFamily: 'sans-serif' }}>
            <h1>{title}</h1>
            <p>NativePHP + Inertia + React setup complete.</p>
            {games?.gameCount !== undefined && <p>Total Games: {games.gameCount}</p>}
            <ul>
                {games?.games?.map((game) => (
                    <li key={game.appid || game.id || game.name}>
                        <h3>{game.name}</h3>
                    </li>
                ))}
            </ul>
        </main>
    );
}
