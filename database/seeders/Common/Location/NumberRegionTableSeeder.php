<?php

namespace Database\Seeders\Common\Location;

use App\Models\Common\Auto\BodyType;
use App\Models\Common\Location\NumberRegion;
use App\Repositories\Contracts\Common\Location\NumberRegionRepositoryInterface;
use Illuminate\Database\Seeder;

class NumberRegionTableSeeder extends Seeder
{
    public function __construct(
      public NumberRegionRepositoryInterface $numberRegionRepository
    ) {
    }

    public function run(): void
    {
        if ($this->numberRegionRepository->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            NumberRegion::factory()
                ->nameAz($datum['az'])
                ->nameRu($datum['ru'])
                ->create([
                    'region_code' => $datum['region_code']
                ]);
        }
    }

    public function data(): array
    {

        return [
            [
                'region_code' => '77',
                'ru' => 'Баку',
                'az' => 'Bakı',
            ],
            [
                'region_code' => '01',
                'ru' => 'Абшерон',
                'az' => 'Abşeron',
            ],
            [
                'region_code' => '02',
                'ru' => 'Агдам',
                'az' => 'Ağdam',
            ],
            [
                'region_code' => '03',
                'ru' => 'Агдаш',
                'az' => 'Ağdaş'
            ],
            [
                'region_code' => '04',
                'ru' => 'Агджабеди',
                'az' => 'Ağcabədi'
            ],
            [
                'region_code' => '24',
                'ru' => 'Аджигабул',
                'az' => 'Hacıqabul'
            ],
            [
                'region_code' => '05',
                'ru' => 'Акстафа',
                'az' => 'Ağstafa'
            ],
            [
                'region_code' => '07',
                'ru' => 'Астара',
                'az' => 'Astara'
            ],
            [
                'region_code' => '06',
                'ru' => 'Ахсу',
                'az' => 'Ağsu'
            ],
            [
                'region_code' => '67',
                'ru' => 'Бабек',
                'az' => 'Babək'
            ],
            [
                'region_code' => '10',
                'ru' => 'Баку',
                'az' => 'Bakı'
            ],
            [
                'region_code' => '90',
                'ru' => 'Баку',
                'az' => 'Bakı'
            ],
            [
                'region_code' => '09',
                'ru' => 'Барда',
                'az' => 'Bərdə'
            ],
            [
                'region_code' => '11',
                'ru' => 'Бейлаган',
                'az' => 'Beyləqan'
            ],
            [
                'region_code' => '08',
                'ru' => 'Белоканы',
                'az' => 'Balakən'
            ],
            [
                'region_code' => '12',
                'ru' => 'Билясувар',
                'az' => 'Biləsuvar'
            ],
            [
                'region_code' => '36',
                'ru' => 'Габала',
                'az' => 'Qəbələ'
            ],
            [
                'region_code' => '35',
                'ru' => 'Газах',
                'az' => 'Qazax'
            ],
            [
                'region_code' => '34',
                'ru' => 'Гах',
                'az' => 'Qax'
            ],
            [
                'region_code' => '23',
                'ru' => 'Гёйчай',
                'az' => 'Göyçay'
            ],
            [
                'region_code' => '22',
                'ru' => 'Геранбой',
                'az' => 'Goranboy'
            ],
            [
                'region_code' => '37',
                'ru' => 'Гобустан',
                'az' => 'Qobustan'
            ],
            [
                'region_code' => '40',
                'ru' => 'Губа',
                'az' => 'Quba'
            ],
            [
                'region_code' => '39',
                'ru' => 'Губадлы',
                'az' => 'Qubadlı'
            ],
            [
                'region_code' => '38',
                'ru' => 'Кусары',
                'az' => 'Qusar'
            ],
            [
                'region_code' => '20',
                'ru' => 'Гянджа',
                'az' => 'Gəncə'
            ],
            [
                'region_code' => '16',
                'ru' => 'Дашкесан',
                'az' => 'Daşkəsən'
            ],
            [
                'region_code' => '15',
                'ru' => 'Джалилабад',
                'az' => 'Cəlilabad'
            ],
            [
                'region_code' => '14',
                'ru' => 'Джебраил',
                'az' => 'Cəbrayıl'
            ],
            [
                'region_code' => '72',
                'ru' => 'Джульфа',
                'az' => 'Culfa'
            ],
            [
                'region_code' => '66',
                'ru' => 'Евлах',
                'az' => 'Yevlax'
            ],
            [
                'region_code' => '62',
                'ru' => 'Загатала',
                'az' => 'Zaqatala'
            ],
            [
                'region_code' => '64',
                'ru' => 'Зангелан',
                'az' => 'Zəngilan'
            ],
            [
                'region_code' => '63',
                'ru' => 'Зардаб',
                'az' => 'Zərdab'
            ],
            [
                'region_code' => '30',
                'ru' => 'Имишли',
                'az' => 'İmişli'
            ],
            [
                'region_code' => '31',
                'ru' => 'Исмаиллы',
                'az' => 'İsmayıllı'
            ],
            [
                'region_code' => '21',
                'ru' => 'Кедабек',
                'az' => 'Gədəbəy'
            ],
            [
                'region_code' => '32',
                'ru' => 'Кельбаджар',
                'az' => 'Kəlbəcər'
            ],
            [
                'region_code' => '33',
                'ru' => 'Кюрдамир',
                'az' => 'Kürdəmir'
            ],
            [
                'region_code' => '41',
                'ru' => 'Лачин',
                'az' => 'Laçın'
            ],
            [
                'region_code' => '42',
                'ru' => 'Ленкорань',
                'az' => 'Lənkəran'
            ],
            [
                'region_code' => '43',
                'ru' => 'Лерик',
                'az' => 'Lerik'
            ],
            [
                'region_code' => '44',
                'ru' => 'Масаллы',
                'az' => 'Masallı'
            ],
            [
                'region_code' => '45',
                'ru' => 'Мингечевир',
                'az' => 'Mingəçevir'
            ],
            [
                'region_code' => '46',
                'ru' => 'Нафталан',
                'az' => 'Naftalan'
            ],
            [
                'region_code' => '70',
                'ru' => 'Нахичевань (город)',
                'az' => 'Naxçıvan şəhəri'
            ],
            [
                'region_code' => '85',
                'ru' => 'Нахичевань',
                'az' => 'Naxçıvan'
            ],
            [
                'region_code' => '47',
                'ru' => 'Нефтечала',
                'az' => 'Neftçala'
            ],
            [
                'region_code' => '48',
                'ru' => 'Огуз',
                'az' => 'Oğuz'
            ],
            [
                'region_code' => '69',
                'ru' => 'Ордубад',
                'az' => 'Ordubad'
            ],
            [
                'region_code' => '49',
                'ru' => 'Саатлы',
                'az' => 'Saatlı'
            ],
            [
                'region_code' => '54',
                'ru' => 'Сабирабад',
                'az' => 'Sabirabad'
            ],
            [
                'region_code' => '52',
                'ru' => 'Сальяны',
                'az' => 'Salyan'
            ],
            [
                'region_code' => '51',
                'ru' => 'Самух',
                'az' => 'Samux'
            ],
            [
                'region_code' => '53',
                'ru' => 'Сиазань',
                'az' => 'Siyəzən'
            ],
            [
                'region_code' => '50',
                'ru' => 'Сумгаит',
                'az' => 'Sumqayıt'
            ],
            [
                'region_code' => '69',
                'ru' => 'Товуз',
                'az' => 'Tovuz'
            ],
            [
                'region_code' => '59',
                'ru' => 'Тертер',
                'az' => 'Tərtər'
            ],
            [
                'region_code' => '61',
                'ru' => 'Уджары',
                'az' => 'Ucar'
            ],
            [
                'region_code' => '19',
                'ru' => 'Физули',
                'az' => 'Füzuli'
            ],
            [
                'region_code' => '26',
                'ru' => 'Ханкенди',
                'az' => 'Xankəndi'
            ],
            [
                'region_code' => '27',
                'ru' => 'Хачмаз',
                'az' => 'Xaçmaz'
            ],
            [
                'region_code' => '28',
                'ru' => 'Ходжавенд',
                'az' => 'Xocavənd'
            ],
            [
                'region_code' => '29',
                'ru' => 'Хызы',
                'az' => 'Xızı'
            ],
            [
                'region_code' => '17',
                'ru' => 'Шабран',
                'az' => 'Şabran'
            ],
            [
                'region_code' => '57',
                'ru' => 'Шамкир',
                'az' => 'Şəmkir'
            ],
            [
                'region_code' => '68',
                'ru' => 'Шарур',
                'az' => 'Şərur'
            ],
            [
                'region_code' => '71',
                'ru' => 'Шахбуз',
                'az' => 'Şahbuz'
            ],
            [
                'region_code' => '55',
                'ru' => 'Шеки',
                'az' => 'Şəki'
            ],
            [
                'region_code' => '56',
                'ru' => 'Шемаха',
                'az' => 'Şamaxı'
            ],
            [
                'region_code' => '18',
                'ru' => 'Ширван',
                'az' => 'Şirvan'
            ],
            [
                'region_code' => '58',
                'ru' => 'Шуша',
                'az' => 'Şuşa'
            ],
            [
                'region_code' => '65',
                'ru' => 'Ярдымлы',
                'az' => 'Yardımlı'
            ],
            [
                'region_code' => '25',
                'ru' => 'Xanlar',
                'az' => 'Xanlar'
            ]
        ];
    }

}
