
<div class="acordeon-conteiner__claster-wrapper acordeon-conteiner__claster-wrapper_flex-start">
    <div class="acordeon-conteiner__separateV3">
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Bölgə',
            'name' => 'region_id',
            'options' => $regions
        ])
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Avtomobil təsnifatı',
            'name' => 'class_type_id',
            'options' => $classTypes
        ])
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Marka',
            'name' => 'car_brand_id',
            'options' => $brands
        ])
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Model',
            'name' => 'car_model_id',
            'options' => $models
        ])
        <div class="catalog__filtr__filtr-element catalog__filtr__filtr-element_dobl-title">
            @include('front.pages.profile.business.particles.rental.common.double-select-group', [
                'title' => 'Ötürücü',
                'name' => 'gear_id',
                'options' => $gears
            ])
            @include('front.pages.profile.business.particles.rental.common.input-group', [
                'title' => 'Mühərrik',
                'name' => 'engine_volume',
                'placeholder' => 'Mühərrik',
            ])
        </div>
        <div class="catalog__filtr__filtr-element catalog__filtr__filtr-element_dobl-title">
            @include('front.pages.profile.business.particles.rental.common.double-select-group', [
                'title' => 'İl',
                'name' => 'year',
                'options' => [
                    (object) ['id' => 2010, 'name' => 2010],
                    (object) ['id' => 2012, 'name' => 2012],
                    (object) ['id' => 2014, 'name' => 2014],
                    (object) ['id' => 2018, 'name' => 2018],
                ]
            ])
            @include('front.pages.profile.business.particles.rental.common.input-group', [
                'title' => 'Yürüş',
                'subtitle' => 'km',
                'name' => 'mileage',
                'placeholder' => 'Yürüş',
            ])
        </div>
    </div>
    <div class="acordeon-conteiner__separateV3">
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Oturacaqların sayı',
            'name' => 'seat_count',
            'options' => [
                (object) ['id' => 2, 'name' => 2],
                (object) ['id' => 4, 'name' => 4],
                (object) ['id' => 5, 'name' => 5],
                (object) ['id' => 7, 'name' => 7],
            ]
        ])
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Yanacaq növü',
            'name' => 'fuel_type_id',
            'options' => $fuelTypes
        ])
        @include('front.pages.profile.business.particles.rental.common.filter-input-group', [
            'title' => 'Yanacaq sərfi',
            'name' => 'fuel_consumption',
            'placeholder' => 'Yanacaq sərfi',
        ])
        @include('front.pages.profile.business.particles.rental.common.select-group', [
            'title' => 'Sürətlər qutusu',
            'name' => 'transmission_id',
            'options' => $transmissions
        ])
        <div class="acordeon__color">
            @include('front.pages.profile.business.particles.rental.common.select-group', [
                'title' => 'Rəng',
                'name' => 'color_id',
                'options' => $colors
            ])
            <div class="acordeon__color-checkbox">
                <div class="checkbox">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="metallic" placeholder="@lang('Metalik')" value="{{ old('metallic') }}">
                        <span>@lang('Metalik')</span>
                    </label>
                </div>
                <div class="checkbox">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="matte" placeholder="@lang('Mat')" value="{{ old('matte') }}">
                        <span>@lang('Mat')</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rent-car-price-list add-more-location">
    <h4 class="cart-main-info__title-ul">Стоимость аренды по дням:</h4>
    <div class="rent-car-price-list__table table-prise-rent">
        <div class="table-prise-rent__line table-prise-rent__line_header">
            <div class="table-prise-rent__element-V1">
                <p>Количество дней:</p>
            </div>
            <div class="table-prise-rent__element-V2">
                <p>Цена:</p>
                <select name="" id="">
                    <option value="">USD</option>
                    <option value="">EUR</option>
                </select>
            </div>
        </div>
        <div class="table-prise-rent__line table-prise-rent__line_default">
            <div class="table-prise-rent__element-V1">
                <div class="table-prise-rent__val-box">
                    <p>От</p>
                    <input type="text" placeholder="20">
                </div>
                <div class="table-prise-rent__val-box">
                    <p>До</p>
                    <input type="text" placeholder="20">
                </div>
            </div>
            <div class="table-prise-rent__element-V2">
                <input type="text" placeholder="120">
            </div>
            <div class="btn-add-del del-price-rent-car">
                <div class="btn-add-del__icon">
                    <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="rent-car-price-list__new-element">
        </div>
    </div>
    <div class="add-more-location__new-location">
        <div class="btn-add-del add-days">
            <div class="btn-add-del__icon">
                <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
            </div>
            <span>Добавить дни</span>
        </div>
    </div>
</div>
