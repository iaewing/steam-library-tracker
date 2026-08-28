import { formatMinutes } from '@/utils/formatters';
import { useState } from 'react';
import { router } from '@inertiajs/react';

export default function GameCard({ game }) {
    const [completed, setCompleted] = useState(game.completed);

    function handleGameCompletedChange(event) {
        const newState = event.target.checked;
        setCompleted(newState);

        router.patch(`/games/${game.id}/completed`, {
            completed: newState,
        }, {
            preserveScroll: true
        });
    }


    return (
        <a href={'https://store.steampowered.com/app/' + game.external_id} target="_blank" key={game.name + '-' + game.external_id}>
            <div className="bg-indigo-200 rounded-xl p-4">
                <div className="flex items-center justify-between">
                    <div className="flex">
                        <img src={game.img_icon_url} />
                        <div className="ml-2 text-xl truncate">{game.name}</div>
                    </div>
                    <div>
                        Completed: <input type="checkbox" onChange={(event) => handleGameCompletedChange(event)} checked={completed} />
                    </div>
                </div>
                <p className="text-sm">Total Playtime: {formatMinutes(game.playtime_forever)}</p>
            </div>
        </a>
    );
}
