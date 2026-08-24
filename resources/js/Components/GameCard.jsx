export default function GameCard({ game }) {
    return (
            <li key={game.name + '-' + game.appId}>
                <h3>{game.name}</h3>
            </li>
    );
}
