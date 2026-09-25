import { formatMinutes } from '@/utils/formatters';
import { useState } from 'react';
import { router } from '@inertiajs/react';

export default function GameCard({ game }) {
    function handleGameCompletedChange(event) {
        router.patch(`/games/${game.id}/completed`, {
            completed: event.target.checked,
        }, {
            preserveScroll: true
        });
    }


    return (
        <a href={'https://store.steampowered.com/app/' + game.external_id} target="_blank">
            <div className="bg-indigo-200 rounded-xl p-4">
                <div className="flex items-center justify-between">
                    <div className="flex">
                        <img src={game.img_icon_url} />
                        <div className="ml-2 text-xl truncate">{game.name}</div>
                    </div>
                    <div>
                        Completed: <input type="checkbox" onChange={(event) => handleGameCompletedChange(event)} checked={Boolean(game.completed)} />
                    </div>
                </div>
                <p className="text-sm">Total Playtime: {formatMinutes(game.playtime_forever)}</p>
            </div>
        </a>
    );
}
