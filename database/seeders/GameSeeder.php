<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = '{
            "response": {
                "games": [
                    {
                        "appid": 322190,
                        "name": "SteamWorld Heist",
                        "playtime_forever": 411,
                        "img_icon_url": "5838d342266d56bdf4416d59d35939df5d52b2f0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 323190,
                        "name": "Frostpunk",
                        "playtime_forever": 271,
                        "img_icon_url": "0561084dfe24c469c905fe0681da82aa31102836",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 326670,
                        "name": "Warhammer Quest",
                        "playtime_forever": 0,
                        "img_icon_url": "a2643cdf292417d1809a776fc3e0ca441194f461",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 350080,
                        "name": "Wolfenstein: The Old Blood ",
                        "playtime_forever": 0,
                        "img_icon_url": "e45bc4d7a8233546c74f1cbba4e7d7a02bfc53a0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 356190,
                        "name": "Middle-earth™: Shadow of War™",
                        "playtime_forever": 0,
                        "img_icon_url": "316c479e5d51d21e15eb8f82338fce82c42c4115",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 359320,
                        "name": "Elite Dangerous",
                        "playtime_forever": 55,
                        "img_icon_url": "670f2f289a180f7ac291585df847009640ebf1c5"
                    },
                    {
                        "appid": 361420,
                        "name": "ASTRONEER",
                        "playtime_forever": 146,
                        "img_icon_url": "18ef632a152a69a8fb4f62c074cd50aa15d3bf33",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 364360,
                        "name": "Total War: WARHAMMER",
                        "playtime_forever": 38,
                        "img_icon_url": "918a2af60362c81e36dabb20bf99c4d1aea45ff8",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 367450,
                        "name": "Poly Bridge",
                        "playtime_forever": 18,
                        "img_icon_url": "7bc695b845364099d87469c2d9074a3782c68638",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 367520,
                        "name": "Hollow Knight",
                        "playtime_forever": 1379,
                        "img_icon_url": "f6ab055c2366237200b1a31cccbd6cf81e436d72",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 368260,
                        "name": "Marvel\'s Midnight Suns",
                        "playtime_2weeks": 18,
                        "playtime_forever": 169,
                        "img_icon_url": "67a641b993a2bfab72a2466b4ee7050c184b7dc5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 374320,
                        "name": "DARK SOULS™ III",
                        "playtime_forever": 2435,
                        "img_icon_url": "7abe1a33129c20cf10d2c74128bbd657a2a2c806",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 379720,
                        "name": "DOOM",
                        "playtime_forever": 613,
                        "img_icon_url": "b6e72ff47d1990cb644700751eeeff14e0aba6dc",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 391220,
                        "name": "Rise of the Tomb Raider",
                        "playtime_forever": 764,
                        "img_icon_url": "0b8a37f32ed2b7c934be8aa94d53f71e274c6497",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 399720,
                        "name": "XO",
                        "playtime_forever": 34,
                        "img_icon_url": "fc6cff0a6eba03d40ebcde35a2a65e5e63812e52",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 409710,
                        "name": "BioShock Remastered",
                        "playtime_forever": 386,
                        "img_icon_url": "eb72262cd3ccc3219dd76392be3b60a4b6cbfd38",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 409720,
                        "name": "BioShock 2 Remastered",
                        "playtime_forever": 0,
                        "img_icon_url": "97527a02b36f8ac4aba21005c2d953cc908a08e1",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 413150,
                        "name": "Stardew Valley",
                        "playtime_forever": 135,
                        "img_icon_url": "35d1377200084a4034238c05b0c8930451e2fb40",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 427520,
                        "name": "Factorio",
                        "playtime_forever": 13555,
                        "img_icon_url": "267f5a89f36ab287e600a4e7d4e73d3d11f0fd7d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 442070,
                        "name": "Drawful 2",
                        "playtime_forever": 0,
                        "img_icon_url": "a2aab99a9ec657f817aff247593b3310cae44288",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 448510,
                        "name": "Overcooked",
                        "playtime_forever": 109,
                        "img_icon_url": "0f8cb2d03134bfbc0536dcc9a476d9ba3a1e67f5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 455340,
                        "name": "Warhammer 40,000: Armageddon - Da Orks",
                        "playtime_forever": 0,
                        "img_icon_url": "c6aaf3694fa611cc48b4b606f9147d483677762d"
                    },
                    {
                        "appid": 489830,
                        "name": "The Elder Scrolls V: Skyrim Special Edition",
                        "playtime_forever": 181,
                        "img_icon_url": "0dfe3eed5658f9fbd8b62f8021038c0a4190f21d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 490110,
                        "name": "The Precinct",
                        "playtime_forever": 962,
                        "img_icon_url": "3ab06b568a20df6c1580205ca1ad4cd945250a6f",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 502370,
                        "name": "Warhammer 40,000: Sanctus Reach (Classic)",
                        "playtime_forever": 0,
                        "img_icon_url": "d92fbaad83a2c96eb6616d18ee7d3dba824e73f1",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 502500,
                        "name": "ACE COMBAT™7: SKIES UNKNOWN",
                        "playtime_forever": 108,
                        "img_icon_url": "f7e1587f3521cacbdebd07b25c05103a963160a8",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 503560,
                        "name": "911 Operator",
                        "playtime_forever": 0,
                        "img_icon_url": "823158b3e81e69f1fb9c355c86f05655575e6317",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 504230,
                        "name": "Celeste",
                        "playtime_forever": 12,
                        "img_icon_url": "04cb7aa0b497a3962e6b1655b7fd81a2cc95d18b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 527230,
                        "name": "For The King",
                        "playtime_forever": 0,
                        "img_icon_url": "790411a4c44e243fa19fe8b3b6a8ca15679c7fbf",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 546560,
                        "name": "Half-Life: Alyx",
                        "playtime_forever": 6,
                        "img_icon_url": "225032ac2ad1aca8f5fd98baa2b9daf1eebea5ca",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 548430,
                        "name": "Deep Rock Galactic",
                        "playtime_forever": 330,
                        "img_icon_url": "e033e23c29a192a17c16a7645a2b423ac64ff447",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 552500,
                        "name": "Warhammer: Vermintide 2",
                        "playtime_forever": 0,
                        "img_icon_url": "a671f2ddf7359beba9702ac097baf6d50cb07202",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 553210,
                        "name": "Warhammer 40,000: Space Wolf",
                        "playtime_forever": 0,
                        "img_icon_url": "cfe3e55633a81f361f17c68e2930f55298935fa5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 553850,
                        "name": "HELLDIVERS™ 2",
                        "playtime_forever": 2846,
                        "img_icon_url": "c3dff088e090f81d6e3d88eabbb67732647c69cf",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 582010,
                        "name": "Monster Hunter: World",
                        "playtime_forever": 369,
                        "img_icon_url": "6ec147f2d423f435e15eb79b3d82f771913de634",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 594570,
                        "name": "Total War: WARHAMMER II",
                        "playtime_forever": 394,
                        "img_icon_url": "fe90760b3b9537216e52ccc5d88de2e67ac500c2",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 599140,
                        "name": "Graveyard Keeper",
                        "playtime_forever": 0,
                        "img_icon_url": "b37ef6d7eb243b4d9fc017dec7bc11b234f34cc2",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 606150,
                        "name": "Moonlighter",
                        "playtime_forever": 0,
                        "img_icon_url": "13ffc570ce5bbe6a5a0c0eec567b87dab07cae25",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 609920,
                        "name": "Hotshot Racing",
                        "playtime_forever": 0,
                        "img_icon_url": "8fa14d0e6a7b1976e996959e8450c12a40089ea6",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 632360,
                        "name": "Risk of Rain 2",
                        "playtime_forever": 0,
                        "img_icon_url": "0b809ac6f25e6570fecae5fc47bca0139a7bf70c",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 632470,
                        "name": "Disco Elysium",
                        "playtime_forever": 75,
                        "img_icon_url": "b681544caa931c7c1a6788e6e3e33cb42892d17c",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 637090,
                        "name": "BATTLETECH",
                        "playtime_forever": 7,
                        "img_icon_url": "4f606fa5106ea8196bc2ea56ebe84c225827c387",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 640590,
                        "name": "The LEGO® NINJAGO® Movie Video Game",
                        "playtime_forever": 0,
                        "img_icon_url": "e73b26c11ea3dd22910565c0621a3f511ea943d3",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 646570,
                        "name": "Slay the Spire",
                        "playtime_forever": 2637,
                        "img_icon_url": "33ea124ea8c03a9ce7012d34c3b348a351612fca",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 688420,
                        "name": "Bad North: Jotunn Edition",
                        "playtime_forever": 79,
                        "img_icon_url": "038a9c080d91b1963b51498541a718f844a0f162",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 720660,
                        "name": "Overloop",
                        "playtime_forever": 0,
                        "img_icon_url": "c7966bf74896234fce97749e4098951fa3cb42de",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 729040,
                        "name": "Borderlands GOTY Enhanced",
                        "playtime_forever": 0,
                        "img_icon_url": "aba56aae141ef1495cef3534163beb1664b417c0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 742420,
                        "name": "Saints Row",
                        "playtime_forever": 0,
                        "img_icon_url": "aebb7688ba04cb6b184248a50581d493126dcbd6",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 750920,
                        "name": "Shadow of the Tomb Raider",
                        "playtime_forever": 31,
                        "img_icon_url": "7db38cff16091c9c058892fcfeee102a6ed589d9",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 753640,
                        "name": "Outer Wilds",
                        "playtime_forever": 30,
                        "img_icon_url": "8d0c2dcfc599445affcbad76a34d89478c022780",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 812140,
                        "name": "Assassin\'s Creed Odyssey",
                        "playtime_forever": 76,
                        "img_icon_url": "4b6cf0715b30669411bf204bce7ed99a9c84671b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 834740,
                        "name": "Circle Empires",
                        "playtime_forever": 2,
                        "img_icon_url": "9a26f2fab66dfb8a0db4f5c1e39e6b5597a5d43e",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 841190,
                        "name": "Honey, I Joined a Cult",
                        "playtime_forever": 0,
                        "img_icon_url": "550c817ef294dca618a74096de6ae006deb9e348",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 853140,
                        "name": "Adeptus Titanicus: Dominus",
                        "playtime_forever": 0,
                        "img_icon_url": "dafd72762ce64e3e6152415d5a5badbed40e3d16",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 870780,
                        "name": "Control Ultimate Edition",
                        "playtime_forever": 0,
                        "img_icon_url": "3438e3a03c82194349d66f99ee642ba59cbcc3dc",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 882100,
                        "name": "XCOM: Chimera Squad",
                        "playtime_forever": 99,
                        "img_icon_url": "dd8ae1a236af5d4a833f41aab2fdad902f454c63",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 892970,
                        "name": "Valheim",
                        "playtime_forever": 322,
                        "img_icon_url": "2f64c9a826e2c6cf3253fea4834c2e612db09143"
                    },
                    {
                        "appid": 899770,
                        "name": "Last Epoch",
                        "playtime_forever": 1086,
                        "img_icon_url": "af127fa6337a3c44e52690b62f26530d520127f4"
                    },
                    {
                        "appid": 910450,
                        "name": "Warhammer Quest 2: The End Times",
                        "playtime_forever": 0,
                        "img_icon_url": "305854ed9917718596afa7620d791c8035ad0df9",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 911400,
                        "name": "Assassin\'s Creed III Remastered",
                        "playtime_forever": 0,
                        "img_icon_url": "68e5640754e5ddf29aadff49062fa68cc8c8f4a5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 952060,
                        "name": "Resident Evil 3",
                        "playtime_forever": 0,
                        "img_icon_url": "136b7a39787b0d8df93cf3b757c36ae1eb392784",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 952070,
                        "name": "RESIDENT EVIL RESISTANCE",
                        "playtime_forever": 0,
                        "img_icon_url": "05c0148e8e414361742c38e3709ca9cdd9c637a8",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 972660,
                        "name": "Spiritfarer®: Farewell Edition",
                        "playtime_forever": 0,
                        "img_icon_url": "21c6c86b51df38e9480231792acf0cfc30f51820",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 976730,
                        "name": "Halo: The Master Chief Collection",
                        "playtime_2weeks": 40,
                        "playtime_forever": 1090,
                        "img_icon_url": "196a45d8df1981ff6b6b1872a38dc38f6c22875d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 990080,
                        "name": "Hogwarts Legacy",
                        "playtime_forever": 62,
                        "img_icon_url": "a9ecb94f249768d0ee5ccecbffe8d8c06d9bed59",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1022310,
                        "name": "Warhammer Underworlds - Shadespire Edition",
                        "playtime_forever": 0,
                        "img_icon_url": "a9d25e962b0fdc70ddf1f18cbb4bd009876a0244",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1030300,
                        "name": "Hollow Knight: Silksong",
                        "playtime_forever": 0,
                        "img_icon_url": "b4a999c1302e3ac123c041fd41bb8a34528c6ab5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1041720,
                        "name": "Kingdoms of Amalur: Re-Reckoning",
                        "playtime_forever": 0,
                        "img_icon_url": "1f49b37c0b59f48f45477931504e790b1bfcf88d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1043810,
                        "name": "Tactical Breach Wizards",
                        "playtime_forever": 720,
                        "img_icon_url": "d0dd5250a8507b64ccb0d42cc1d9aa4ada4b3945",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1062090,
                        "name": "Timberborn",
                        "playtime_forever": 479,
                        "img_icon_url": "a4863a01d88f18c948a712bfe90234ece672ca83",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1063730,
                        "name": "New World: Aeternum",
                        "playtime_forever": 170,
                        "img_icon_url": "672e6cf0670022bc9222af15e5f8cd4b21872d1b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1086940,
                        "name": "Baldur\'s Gate 3",
                        "playtime_2weeks": 19,
                        "playtime_forever": 5714,
                        "img_icon_url": "d866cae7ea1e471fdbc206287111f1b642373bd9",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1102190,
                        "name": "Monster Train",
                        "playtime_forever": 277,
                        "img_icon_url": "71b1344e42cc348d3b1a40404ab0547f9ed860ae",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1113000,
                        "name": "Persona 4 Golden",
                        "playtime_forever": 540,
                        "img_icon_url": "295e86f2d5393325f38f33777b357d86e23c751d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1142710,
                        "name": "Total War: WARHAMMER III",
                        "playtime_forever": 65,
                        "img_icon_url": "6db17b5e504c0850a9a60edac9152de019d0d3a8",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1144170,
                        "name": "Warhammer: Chaos & Conquest",
                        "playtime_forever": 0,
                        "img_icon_url": "5c38face6be6ac9d81bb7a19b1e52c8a5d2408dc"
                    },
                    {
                        "appid": 1145350,
                        "name": "Hades II",
                        "playtime_forever": 1491,
                        "img_icon_url": "621d9f1cfa204c0bae07a981f41007d2cf03a56c",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1145360,
                        "name": "Hades",
                        "playtime_forever": 460,
                        "img_icon_url": "8a3fca36a00883e8066263ad35dd15d77a1f9abc",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1151640,
                        "name": "Horizon Zero Dawn™ Complete Edition",
                        "playtime_forever": 997,
                        "img_icon_url": "08a1b6df68bdc8c28c974b79325ed8c89417af48",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1172380,
                        "name": "STAR WARS Jedi: Fallen Order™ ",
                        "playtime_forever": 344,
                        "img_icon_url": "0ea1d285a8ee6fbeef0e8f7f3b2d7fa4cbcb423b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1172710,
                        "name": "Dune: Awakening",
                        "playtime_forever": 4905,
                        "img_icon_url": "4eb2afeae249b94be3ef0251f22fe72cd61d4c6e",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1174180,
                        "name": "Red Dead Redemption 2",
                        "playtime_forever": 0,
                        "img_icon_url": "5106abd9c1187a97f23295a0ba9470c94804ec6c",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1176470,
                        "name": "Terra Invicta",
                        "playtime_forever": 73,
                        "img_icon_url": "8c5e5f5252c5fd85b3327c4faca2d30832ecdeb1",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1209490,
                        "name": "Exit the Gungeon",
                        "playtime_forever": 0,
                        "img_icon_url": "e37f733885910cd01f7d5747e3c88ea227bcf865",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1218210,
                        "name": "Coromon",
                        "playtime_forever": 71,
                        "img_icon_url": "c4e8ca1f42851fe7cdc278e0fecd7386ca2108a5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1235140,
                        "name": "Yakuza: Like a Dragon",
                        "playtime_forever": 299,
                        "img_icon_url": "2dd517dc392377291d18d89722d26f737795829d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1237970,
                        "name": "Titanfall® 2",
                        "playtime_forever": 0,
                        "img_icon_url": "d73c7e572859bd7490947d1aeab5c33eda18fd64",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1245620,
                        "name": "ELDEN RING",
                        "playtime_forever": 3442,
                        "img_icon_url": "b6e290dd5a92ce98f89089a207733c70c41a1871",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1266700,
                        "name": "Destroy All Humans! 2 - Reprobed",
                        "playtime_forever": 0,
                        "img_icon_url": "7c795768c5d6f247495021a2b9af5d19bb6cba85",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1286680,
                        "name": "Tiny Tina\'s Wonderlands",
                        "playtime_forever": 3,
                        "img_icon_url": "04df847d8960c8ba764764cf21bf96621c8e8314",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1328670,
                        "name": "Mass Effect™ Legendary Edition",
                        "playtime_forever": 572,
                        "img_icon_url": "443ed7dba43882ef4298f8ed15bf67f323461e14",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1336490,
                        "name": "Against the Storm",
                        "playtime_forever": 319,
                        "img_icon_url": "44ec53399bb08097ee5a348b722b2bfecc04a97c",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1382070,
                        "name": "Viewfinder",
                        "playtime_forever": 0,
                        "img_icon_url": "6da05b88ad6faf05ea093baa77177700961ff056",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1426210,
                        "name": "It Takes Two",
                        "playtime_forever": 672,
                        "img_icon_url": "6b15f6d81c4fc52056f4928b363b7fac591a945b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1462040,
                        "name": "FINAL FANTASY VII REMAKE INTERGRADE",
                        "playtime_forever": 818,
                        "img_icon_url": "3cf19bc8fa3bc953d68a9b46b0a7555839188da0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1484280,
                        "name": "Demeo",
                        "playtime_forever": 105,
                        "img_icon_url": "edce14008119095d6c6dea4d10b0c37c0d0031ce",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1506510,
                        "name": "The Ramp",
                        "playtime_forever": 2,
                        "img_icon_url": "a799861768617851f2396d71ada01819a7226ba0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1562430,
                        "name": "DREDGE",
                        "playtime_forever": 296,
                        "img_icon_url": "c8b352e87c28aa9ffe3a4641b230beb5064a49e6",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1562700,
                        "name": "SANABI",
                        "playtime_forever": 201,
                        "img_icon_url": "f57bf09ea64fc813ddb46e4440f8f89f953b9c77",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1566200,
                        "name": "Tape to Tape",
                        "playtime_forever": 640,
                        "img_icon_url": "73a1e915347137a533f058a4b5d7b2f744a499b7",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1577120,
                        "name": "The Quarry",
                        "playtime_forever": 0,
                        "img_icon_url": "a07e751df943234665eb9b91fd44cbb4aa3477c6",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1578650,
                        "name": "Citizen Sleeper",
                        "playtime_forever": 49,
                        "img_icon_url": "39a0deacdbdfdb97ef9e634282db10973e39c681",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1611910,
                        "name": "Warhammer 40,000: Chaos Gate - Daemonhunters",
                        "playtime_forever": 0,
                        "img_icon_url": "6495e5b6550e114ffff75c39226f3680211b32ce",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1659420,
                        "name": "UNCHARTED™: Legacy of Thieves Collection",
                        "playtime_forever": 0,
                        "img_icon_url": "b566a403067d6abf75136a3c19f9ed0d2e4fb5b1",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1677770,
                        "name": "The Case of the Golden Idol",
                        "playtime_forever": 0,
                        "img_icon_url": "64fd010f49793095093a832926a856fe2848aac9",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1687950,
                        "name": "Persona 5 Royal",
                        "playtime_forever": 811,
                        "img_icon_url": "2f868d8c16fc357dc7122d440b9de3916e36e6fa",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1794680,
                        "name": "Vampire Survivors",
                        "playtime_forever": 1163,
                        "img_icon_url": "3677cf1be3be1f4ea42261c62ce10519715ade58",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1808500,
                        "name": "ARC Raiders",
                        "playtime_forever": 414,
                        "img_icon_url": "c284e73b6f3321864805d66f99924a0da9f0b219",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1812090,
                        "name": "Escape Academy",
                        "playtime_forever": 227,
                        "img_icon_url": "99839dead94f4e2a28cf93807afdcdc15b820d7a",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1817070,
                        "name": "Marvel’s Spider-Man Remastered",
                        "playtime_2weeks": 133,
                        "playtime_forever": 133,
                        "img_icon_url": "346333cb340139ad8b697005e5c79a3162c387b0",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1817230,
                        "name": "Hi-Fi RUSH",
                        "playtime_forever": 794,
                        "img_icon_url": "4ab983bdce853739bba2494342425bc206cadfe5",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1837750,
                        "name": "Demeo - PC Edition",
                        "playtime_forever": 0,
                        "img_icon_url": "edce14008119095d6c6dea4d10b0c37c0d0031ce",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1903340,
                        "name": "Clair Obscur: Expedition 33",
                        "playtime_forever": 873,
                        "img_icon_url": "d48fb3ed033a08bad9bf0a2e1ceb145e58ffe0aa",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 1966720,
                        "name": "Lethal Company",
                        "playtime_forever": 56,
                        "img_icon_url": "80d2453285274e4723c884a671cdd3f8fe2f766f"
                    },
                    {
                        "appid": 2005010,
                        "name": "Warhammer 40,000: Boltgun",
                        "playtime_forever": 64,
                        "img_icon_url": "2ffcd2f993a8dac66c8523fb579234ffa2c83bdf",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2062430,
                        "name": "BALL x PIT",
                        "playtime_forever": 687,
                        "img_icon_url": "7651f4667f6084ef598a2da930d11e26d0aa5f82",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2086430,
                        "name": "NIMRODS",
                        "playtime_forever": 301,
                        "img_icon_url": "b94c31ac59fe0221008d5d6bb1207c19e51c740d",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2183900,
                        "name": "Warhammer 40,000: Space Marine 2",
                        "playtime_forever": 0,
                        "img_icon_url": "0fccfb5eb2acb934db1fe95a4e578f25ccbd71ec",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2246340,
                        "name": "Monster Hunter Wilds",
                        "playtime_forever": 369,
                        "img_icon_url": "23474d61e4506351f9b26f230fd417d017cf2806",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2321470,
                        "name": "Deep Rock Galactic: Survivor",
                        "playtime_forever": 833,
                        "img_icon_url": "21c0012fc6c4419bad40b03ce6db571d2390642b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2379780,
                        "name": "Balatro",
                        "playtime_forever": 3110,
                        "img_icon_url": "b6018068070ab0e23561694c11f7950dd6f4c752",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2521630,
                        "name": "Mini Settlers",
                        "playtime_forever": 155,
                        "img_icon_url": "4153470c65e756a7e28dcc4d7a2e1fee67b4b03e",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2592160,
                        "name": "Dispatch",
                        "playtime_forever": 0,
                        "img_icon_url": "1fa72a0254bb96aab1642604720d74c376f97756",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 2694490,
                        "name": "Path of Exile 2",
                        "playtime_forever": 285,
                        "img_icon_url": "fa8ff2005f65d0cbc7403a5b18ca77c0bbc9d05a"
                    },
                    {
                        "appid": 2868840,
                        "name": "Slay the Spire 2",
                        "playtime_2weeks": 160,
                        "playtime_forever": 2880,
                        "img_icon_url": "f92b09dab91f1d1738f72fe0dd9be18dcc2901f9"
                    },
                    {
                        "appid": 2909400,
                        "name": "FINAL FANTASY VII REBIRTH",
                        "playtime_forever": 0,
                        "img_icon_url": "3dacad0a047962a94501d9d028c095993c48ce8b",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 3065800,
                        "name": "Marathon",
                        "playtime_forever": 349,
                        "img_icon_url": "ac94c44cc0d83393f57578e5a122eac481e68933",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 3240220,
                        "name": "Grand Theft Auto V Enhanced",
                        "playtime_forever": 0,
                        "img_icon_url": "8355a7bbdb704f727bfba80ec56bc7228991338e",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 3527290,
                        "name": "PEAK",
                        "playtime_forever": 91,
                        "img_icon_url": "b3a992fd5991bd2f4c956d58e062b0ce2988d6cd",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 3934270,
                        "name": "How Many Dudes?",
                        "playtime_2weeks": 105,
                        "playtime_forever": 105,
                        "img_icon_url": "dc1501eb751b913eb1e9f01eb7728b41a06aeef3",
                        "has_community_visible_stats": true
                    },
                    {
                        "appid": 4183500,
                        "name": "Shadowstone Playtest",
                        "playtime_forever": 0,
                        "img_icon_url": "09416091c140bd27fca6b59ebc47506cc7ac6a5d"
                    }
                ]
            }
        }';

        $data = json_decode($json, true);
        $now = now();

        $rows = array_map(function ($game) use ($now) {
            return [
                'external_id'                 => (string) $game['appid'],
                'name'                        => $game['name'],
                'playtime_2weeks'             => $game['playtime_2weeks'] ?? 0,
                'playtime_forever'            => $game['playtime_forever'] ?? 0,
                'img_icon_url'                => $game['img_icon_url'] ?? '',
                'has_community_visible_stats' => $game['has_community_visible_stats'] ?? false,
                'created_at'                  => $now,
                'updated_at'                  => $now,
            ];
        }, $data['response']['games']);

        DB::table('games')->insert($rows);
    }
}
