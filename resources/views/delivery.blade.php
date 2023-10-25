@extends('_layout')

@section('title')
    Zamawiam dostawę
@endsection

@section('content')
    <h2>Samodzielny odbiór albo Zamówienie do biura/domu</h2>
    @include('inc.messages')
    <form action="{{ route('delivery.store') }}" method="post">
        @csrf
        <div class="delivery-package">
            <h3>Wybierz opakowanie:</h3>
            <p>Wszystkie pączki będą w jednym rodzaju opakowania. Dla różnych opakowań musisz stworzyć różne zamówienia.</p>
            <table class="delivery-table">
                <tr>
                    <td><label><input type="radio" name="package" value="bag_simple"
                                @if (old('package') == 'bag_simple' || empty(old('package'))) checked @endif />Worek zwykły</label>
                    </td>
                    <td><label><input type="radio" name="package" value="bag_holiday"
                                @if (old('package') == 'bag_holiday') checked @endif />Worek świąteczny</label>
                    </td>
                    <td><label><input type="radio" name="package" value="box_simple"
                                @if (old('package') == 'box_simple') checked @endif />Pudełko zwykłe</label></td>
                    <td><label><input type="radio" name="package" value="box_holiday"
                                @if (old('package') == 'box_holiday') checked @endif />Pudełko świąteczne</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/bag_simple.jpg') }}"
                                alt="paper bag" />
                        </div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/bag_holiday.jpg') }}"
                                alt="holiday bag" /></div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/box_simple.jpg') }}"
                                alt="paper box" />
                        </div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/box_holiday.jpg') }}"
                                alt="holiday box" /></div>
                    </td>
                </tr>
            </table>
        </div>
        <p>Poniżej pola oznaczone gwiazdką muszą być wypełnione</p>
        <div class="delivery-date-time">
            <table>
                <tr>
                    <td><label for="date" class="client-form-label">*Dzień odbioru/dostawy</label></td>
                    <td><input class="client-form-input" type="date" name="date" id="date"
                            value="{{ old('date') }}" />
                    </td>

                    <td><label for="time" class="client-form-label">*Czas odbioru (albo czas dostawy w ciągu 30
                            minut
                            od)</label></td>
                    <td><input class="client-form-input" type="time" name="time" id="time"
                            value="{{ old('time') }}" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="delivery-shipment-goods-check">
            <div class="delivery-shipment-goods">
                <div class="delivery-shipment">
                    <table class="delivery-table">
                        <tr>
                            <td><label><input type="radio" name="place" value="in_place"
                                        @if (old('place') == 'in_place' || empty(old('place'))) checked @endif />Zabiore na miejscu
                                    samodzielnie</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label><input type="radio" name="place" value="remote_delivery"
                                        @if (old('place') == 'remote_delivery') checked @endif />Zamawiam na adres</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address" class="client-form-label">*Adres dostawy + <br />Dodatkowe
                                    informacje</label>
                            </td>
                            <td>
                                <textarea class="client-form-input" name="address" id="address" value="{{ old('address') }}"
                                    @if (old('place') == 'in_place') address = "Wilanów, ul. Sarmacka" @endif></textarea>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="delivery-goods">
                    <div class="delivery-goods">
                        <h3>Wybierz pąnczki:</h3>
                        <table class="delivery-table">
                            @foreach ($products as $product)
                                <tr>
                                    <td><label for="products[{{ $product->id }}]"
                                            class="cake-type-order">{{ $product->title }}</label></td>
                                    <td><input class="form-control" type="number" name="products[{{ $product->id }}]"
                                            id="products[{{ $product->id }}]" min="0" max="50"
                                            step="1" />
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
                <div class="delivery-client">
                    <table>
                        <tr>
                            <td>
                                <h3>Klient:</h3>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name" class="client-form-label">Imię zamawiającego</label></td>
                            <td><input class="client-form-input" type="text" name="name"
                                    placeholder="Wpisz swoje imię" id="name" /></td>
                        </tr>
                        <tr>
                            <td><label for="tel" class="client-form-label">*Telefon</label></td>
                            <td><input class="client-form-input" type="tel" name="tel"
                                    placeholder="Wpisz swój numer" id="tel" value="{{ old('tel') }}" /></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="delivery-check">
                <h3>Online paragon</h3>
            </div>
        </div>
        <button type="submit" class="submit-button">Wyszlij</button>
    </form>
@endsection
