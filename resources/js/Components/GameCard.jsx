import { formatMinutes } from '@/utils/formatters';

export default function GameCard({ game }) {
    return (
        <div key={game.name + '-' + game.appId} className="bg-red-50 rounded-lg p-2">
            <div className="flex items-center">
                <img src={game.img_icon_url} />
                <h3 className="ml-2">{game.name}</h3>
            </div>
            <p>Total Playtime: {formatMinutes(game.playtime_forever)}</p>
        </div>
    );
}
