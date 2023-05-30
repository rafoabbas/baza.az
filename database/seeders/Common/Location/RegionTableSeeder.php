<?php

namespace Database\Seeders\Common\Location;

use App\Models\Common\Auto\BodyType;
use App\Models\Common\Location\NumberRegion;
use App\Models\Common\Location\Region;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    public function __construct(
      public RegionRepositoryInterface $regionRepository
    ) {
    }

    public function run(): void
    {
        if ($this->regionRepository->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            Region::factory()
                ->nameAz($datum['az'])
                ->nameRu($datum['ru'])
                ->create();
        }
    }

    public function data(): array
    {

        return [
            [
                'region_code' => '02',
                'ru' => 'Агдам',
                'az' => 'Ağdam',
            ],
            [
                'az' => 'Ağdərə',
                'ru' => 'Агдере'
            ],
            [
                'ru' => 'Агдаш',
                'az' => 'Ağdaş'
            ],
            [
                'ru' => 'Агджабеди',
                'az' => 'Ağcabədi'
            ],
            [
                'ru' => 'Аджигабул',
                'az' => 'Hacıqabul'
            ],
            [
                'ru' => 'Акстафа',
                'az' => 'Ağstafa'
            ],
            [
                'ru' => 'Астара',
                'az' => 'Astara'
            ],
            [
                'ru' => 'Ахсу',
                'az' => 'Ağsu'
            ],
            [
                'ru' => 'Бабек',
                'az' => 'Babək'
            ],
            [
                'ru' => 'Баку',
                'az' => 'Bakı'
            ],
            [
                'ru' => 'Барда',
                'az' => 'Bərdə'
            ],
            [
                'ru' => 'Бейлаган',
                'az' => 'Beyləqan'
            ],
            [
                'ru' => 'Белоканы',
                'az' => 'Balakən'
            ],
            [
                'ru' => 'Билясувар',
                'az' => 'Biləsuvar'
            ],
            [
                'ru' => 'Габала',
                'az' => 'Qəbələ'
            ],
            [
                'ru' => 'Газах',
                'az' => 'Qazax'
            ],
            [
                'ru' => 'Гах',
                'az' => 'Qax'
            ],
            [
                'ru' => 'Гёйчай',
                'az' => 'Göyçay'
            ],
            [
                'ru' => 'Геранбой',
                'az' => 'Goranboy'
            ],
            [
                'ru' => 'Гёйгёль',
                'az' => 'Göygöl'
            ],
            [
                'ru' => 'Гёйтепе',
                'az' => 'Göytəpə'
            ],
            [
                'ru' => 'Гобустан',
                'az' => 'Qobustan'
            ],
            [
                'ru' => 'Говлар',
                'az' => 'Qovlar'
            ],
            [
                'ru' => 'Горадиз',
                'az' => 'Horadiz'
            ],
            [
                'ru' => 'Губа',
                'az' => 'Quba'
            ],
            [
                'ru' => 'Губадлы',
                'az' => 'Qubadlı'
            ],
            [
                'ru' => 'Кусары',
                'az' => 'Qusar'
            ],
            [
                'ru' => 'Гянджа',
                'az' => 'Gəncə'
            ],
            [
                'ru' => 'Далимамедли',
                'az' => 'Dəliməmmədli'
            ],
            [
                'ru' => 'Дашкесан',
                'az' => 'Daşkəsən'
            ],
            [
                'ru' => 'Джалилабад',
                'az' => 'Cəlilabad'
            ],
            [
                'ru' => 'Джебраил',
                'az' => 'Cəbrayıl'
            ],
            [
                'ru' => 'Джульфа',
                'az' => 'Culfa'
            ],
            [
                'ru' => 'Евлах',
                'az' => 'Yevlax'
            ],
            [
                'ru' => 'Загатала',
                'az' => 'Zaqatala'
            ],
            [
                'ru' => 'Зангелан',
                'az' => 'Zəngəlan'
            ],
            [
                'ru' => 'Зардаб',
                'az' => 'Zərdab'
            ],
            [
                'ru' => 'Имишли',
                'az' => 'İmişli'
            ],
            [
                'ru' => 'Исмаиллы',
                'az' => 'İsmayıllı'
            ],
            [
                'ru' => 'Кедабек',
                'az' => 'Gədəbəy'
            ],
            [
                'ru' => 'Кельбаджар',
                'az' => 'Kəlbəcər'
            ],
            [
                'ru' => 'Кюрдамир',
                'az' => 'Kürdəmir'
            ],
            [
                'ru' => 'Лачин',
                'az' => 'Laçın'
            ],
            [
                'ru' => 'Ленкорань',
                'az' => 'Lənkəran'
            ],
            [
                'ru' => 'Лерик',
                'az' => 'Lerik'
            ],
            [
                'ru' => 'Лиман',
                'az' => 'Liman'
            ],
            [
                'region_code' => 44,
                'ru' => 'Масаллы',
                'az' => 'Masallı'
            ],
            [
                'ru' => 'Мингечевир',
                'az' => 'Mingəçevir'
            ],
            [
                'ru' => 'Нафталан',
                'az' => 'Naftalan'
            ],
            [
                'region_code' => 85,
                'ru' => 'Нахичевань',
                'az' => 'Naxçıvan'
            ],
            [
                'ru' => 'Нефтечала',
                'az' => 'Neftçala'
            ],
            [
                'ru' => 'Огуз',
                'az' => 'Oğuz'
            ],
            [
                'ru' => 'Ордубад',
                'az' => 'Ordubad'
            ],
            [
                'ru' => 'Саатлы',
                'az' => 'Saatlı'
            ],
            [
                'ru' => 'Сабирабад',
                'az' => 'Sabirabad'
            ],
            [
                'ru' => 'Сальяны',
                'az' => 'Salyan'
            ],
            [
                'ru' => 'Самух',
                'az' => 'Samux'
            ],
            [
                'ru' => 'Сиазань',
                'az' => 'Siyəzən'
            ],
            [
                'ru' => 'Сумгаит',
                'az' => 'Sumqayıt'
            ],
            [
                'ru' => 'Товуз',
                'az' => 'Tovuz'
            ],
            [
                'ru' => 'Тертер',
                'az' => 'Tərtər'
            ],
            [
                'ru' => 'Уджары',
                'az' => 'Ucar'
            ],
            [
                'ru' => 'Физули',
                'az' => 'Füzuli'
            ],
            [
                'ru' => 'Ханкенди',
                'az' => 'Xankəndi'
            ],
            [
                'ru' => 'Хачмаз',
                'az' => 'Xaçmaz'
            ],
            [
                'ru' => 'Ходжавенд',
                'az' => 'Xocavənd'
            ],
            [
                'ru' => 'Ходжалы',
                'az' => 'Xocalı'
            ],
            [
                'ru' => 'Худат',
                'az' => 'Xudat'
            ],
            [
                'ru' => 'Хызы',
                'az' => 'Xızı'
            ],
            [
                'ru' => 'Хырдалан',
                'az' => 'Xırdalan'
            ],
            [
                'ru' => 'Шабран',
                'az' => 'Şabran'
            ],
            [
                'ru' => 'Шамкир',
                'az' => 'Şəmkir'
            ],
            [
                'ru' => 'Шарур',
                'az' => 'Şərur'
            ],
            [
                'ru' => 'Шахбуз',
                'az' => 'Şahbuz'
            ],
            [
                'ru' => 'Шеки',
                'az' => 'Şəki'
            ],
            [
                'ru' => 'Шемаха',
                'az' => 'Şamaxı'
            ],
            [
                'ru' => 'Ширван',
                'az' => 'Şirvan'
            ],
            [
                'ru' => 'Шуша',
                'az' => 'Şuşa'
            ],
            [
                'ru' => 'Ярдымлы',
                'az' => 'Yardımlı'
            ]
        ];
    }
}
