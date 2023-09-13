@extends('layouts.app')

@section('title')
    Zamawiam dostawę
@endsection

@section('content')
    <h2>Samodzielny odbiór czy Zamówienie do biura/domu</h2>
    <p>Pola oznaczone gwiazdką muszą być wypełnione</p>
    <table class="delivery-table">
        <tr>
            <td><label><input type="radio" name="place" value="in_place"
                        @if (old('place') == 'in_place' || empty(old('place'))) checked @endif />Zabiore na miejscu samodzielnie</label>
            </td>
            <td><label><input type="radio" name="place" value="remote_delivery"
                        @if (old('place') == 'remote_delivery') checked @endif />Zamawiam na adres</label>
            </td>
        </tr>
    </table>

    <form action="{{ route('delivery.store') }}" method="post">
        @csrf

        <div class="delivery-form-block">
            <div class="delivery-goods">
                <h3>Wybierz pąnczki:</h3>
                <table class="delivery-table">
                    <tr>
                        <td><label for="american" class="cake-type-order">Amerykańskie</label></td>
                        <td><input class="form-control" type="number" name="american_number" id="american" min="0"
                                max="50" step="1" value="{{ old('american_number') }}" /></td>
                    </tr>
                    <tr>
                        <td><label for="chocolate" class="cake-type-order">Czekoładowe</label></td>
                        <td><input class="form-control" type="number" name="chocolate_number" id="chocolate" min="0"
                                max="50" step="1" /></td>
                    </tr>
                    <tr>
                        <td><label for="pumpkin" class="cake-type-order">Dyniowe</label></td>
                        <td><input class="form-control" type="number" name="pumpkin_number" id="pumpkin" min="0"
                                max="50" step="1" /></td>
                    </tr>
                    <tr>
                        <td><label for="spanish" class="cake-type-order">Hiszpańskie</label></td>
                        <td><input class="form-control" type="number" name="spanish_number" id="spanish" min="0"
                                max="50" step="1" /></td>
                    </tr>
                    <tr>
                        <td><label for="mini" class="cake-type-order">Mini</label></td>
                        <td><input class="form-control" type="number" name="mini_number" id="mini" min="0"
                                max="50" step="1" /></td>
                    </tr>
                </table>
            </div>
            <div class="delivery-client">
                <h3>Adresat:</h3>
                <table>
                    <tr>
                        <td><label for="name" class="client-form-label">Imię zamawiającego</label></td>
                        <td><input class="client-form-input" type="text" name="name" placeholder="Wpisz swoje imię"
                                id="name" /></td>
                    </tr>
                    <tr>
                        <td><label for="tel" class="client-form-label">*Telefon</label></td>
                        <td><input class="client-form-input" type="tel" name="tel" placeholder="Wpisz swój numer"
                                id="tel" value="{{ old('tel') }}" /></td>
                    </tr>
                    <tr>
                        <td><label for="address" class="client-form-label">*Adres dostawy</label></td>
                        <td>
                            <textarea class="client-form-input" name="address" id="address" value="{{ old('address') }}"
                                @if (old('place') == 'in_place') address = "Wilanów, ul. Sarmacka" @endif></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="delivery-client">
                <h3>Info:</h3>
                <table>
                    <tr>
                        <td><label for="date" class="client-form-label">*Dzień odbioru/dostawy</label></td>
                        <td><input class="client-form-input" type="date" name="date" id="date"
                                value="{{ old('date') }}" /></td>
                    </tr>
                    <tr>
                        <td><label for="time" class="client-form-label">*Czas odbioru (albo czas dostawy w ciągu 30
                                minut
                                od)</label></td>
                        <td><input class="client-form-input" type="time" name="time" id="time"
                                value="{{ old('time') }}" /></td>
                    </tr>
                    <tr>
                        <td><label for="message" class="client-form-label">Dodatkowe informacje</label></td>
                        <td>
                            <textarea class="client-form-input" name="message" id="message"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
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
                                alt="paper bag" /></div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/bag_holiday.jpg') }}"
                                alt="holiday bag" /></div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/box_simple.jpg') }}"
                                alt="paper box" /></div>
                    </td>
                    <td>
                        <div class="image"><img class="pack-image" src="{{ url('/images/box_holiday.jpg') }}"
                                alt="holiday box" /></div>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="submit-button">Wyszlij</button>

    </form>
@endsection