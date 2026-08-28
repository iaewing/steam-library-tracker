import { formatMinutes } from '@/utils/formatters';

export default function GameCard({ game }) {
    return (
        <div key={game.name + '-' + game.appId} className="bg-indigo-200 rounded-xl p-4">
            <div className="flex items-center">
                <img src={game.img_icon_url} />
                <div className="ml-2 text-xl">{game.name}</div>
            </div>
            <p className="text-sm">Total Playtime: {formatMinutes(game.playtime_forever)}</p>
        </div>
    );
}
