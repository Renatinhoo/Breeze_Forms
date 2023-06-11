<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <script>
            $(document).ready(function() {

            $('#telefone').mask('(00) 0000-0000');
            $('#cep').mask('00000-000');
            $('#celular').mask('(00) 00000-0000');

            });
        </script>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Digite seu nome" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Endereco -->
        <div>
            <x-input-label for="endereco" :value="__('endereco')" />
            <x-text-input  id="endereco" class="block mt-1 w-full" type="text" name="endereco" placeholder="Digite seu endereço" :value="old('endereco')" required autofocus autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- bairro -->
        <div>
            <x-input-label for="bairro" :value="__('bairro')" />
            <x-text-input  id="bairro" class="block mt-1 w-full" type="text" name="bairro" placeholder="Digite seu bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>
        
        <!-- cep -->
        <div>
            <x-input-label for="cep" :value="__('cep')" />
            <x-text-input class="form-control cep-mask"  pattern="\d{5}-\d{3}" placeholder="00000-000" title="Digite um CEP válido no formato 00000-000" id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- cidade -->
        <div>
            <x-input-label for="cidade" :value="__('cidade')" />
            <select id="cidade" class="block mt-1 w-full" name="cidade" required>

<option value="Adamantina">Adamantina</option>
<option value="Aguaí">Aguaí</option>
<option value="Águas da Prata">Águas da Prata</option>
<option value="Águas de Lindóia">Águas de Lindóia</option>
<option value="Águas de Santa Bárbara">Águas de Santa Bárbara</option>
<option value="Águas de São Pedro">Águas de São Pedro</option>
<option value="Agudos">Agudos</option>
<option value="Alambari">Alambari</option>
<option value="Alfredo Marcondes">Alfredo Marcondes</option>
<option value="Altair">Altair</option>
<option value="Altinópolis">Altinópolis</option>
<option value="Alto Alegre">Alto Alegre</option>
<option value="Alumínio">Alumínio</option>
<option value="Álvares Florence">Álvares Florence</option>
<option value="Álvares Machado">Álvares Machado</option>
<option value="Álvaro de Carvalho">Álvaro de Carvalho</option>
<option value="Alvinlândia">Alvinlândia</option>
<option value="Americana">Americana</option>
<option value="Américo Brasiliense">Américo Brasiliense</option>
<option value="Américo de Campos">Américo de Campos</option>
<option value="Amparo">Amparo</option>
<option value="Analândia">Analândia</option>
<option value="Andradina">Andradina</option>
<option value="Angatuba">Angatuba</option>
<option value="Anhembi">Anhembi</option>
<option value="Anhumas">Anhumas</option>
<option value="Aparecida">Aparecida</option>
<option value="Aparecida d'Oeste">Aparecida d'Oeste</option>
<option value="Apiaí">Apiaí</option>
<option value="Araçariguama">Araçariguama</option>
<option value="Araçatuba">Araçatuba</option>
<option value="Araçoiaba da Serra">Araçoiaba da Serra</option>
<option value="Araguaína">Araguaína</option>
<option value="Araguari">Araguari</option>
<option value="Arapiraca">Arapiraca</option>
<option value="Arapongas">Arapongas</option>
<option value="Arapoti">Arapoti</option>
<option value="Arapuá">Arapuá</option>
<option value="Arapuã">Arapuã</option>
<option value="Arara">Arara</option>
<option value="Araranguá">Araranguá</option>
<option value="Araraquara">Araraquara</option>
<option value="Araras">Araras</option>
<option value="Arari">Arari</option>
<option value="Araricá">Araricá</option>
<option value="Araripe">Araripe</option>
<option value="Araruama">Araruama</option>
<option value="Araucária">Araucária</option>
<option value="Araxá">Araxá</option>
<option value="Arealva">Arealva</option>
<option value="Areias">Areias</option>
<option value="Areiópolis">Areiópolis</option>
<option value="Ariranha">Ariranha</option>
<option value="Artur Nogueira">Artur Nogueira</option>
<option value="Aruanã">Aruanã</option>
<option value="Arujá">Arujá</option>
<option value="Ascurra">Ascurra</option>
<option value="Aspásia">Aspásia</option>
<option value="Assaí">Assaí</option>
<option value="Assis">Assis</option>
<option value="Atibaia">Atibaia</option>
<option value="Auriflama">Auriflama</option>
<option value="Avaí">Avaí</option>
<option value="Avanhandava">Avanhandava</option>
<option value="Avaré">Avaré</option>
<option value="Bady Bassitt">Bady Bassitt</option>
<option value="Balbinos">Balbinos</option>
<option value="Bálsamo">Bálsamo</option>
<option value="Bananal">Bananal</option>
<option value="Barão">Barão</option>
<option value="Barão de Antonina">Barão de Antonina</option>
<option value="Barão de Cocais">Barão de Cocais</option>
<option value="Barão de Cotegipe">Barão de Cotegipe</option>
<option value="Barão do Triunfo">Barão do Triunfo</option>
<option value="Baraúna">Baraúna</option>
<option value="Barbacena">Barbacena</option>
<option value="Barbalha">Barbalha</option>
<option value="Barbosa">Barbosa</option>
<option value="Barbosa Ferraz">Barbosa Ferraz</option>
<option value="Bariri">Bariri</option>
<option value="Barra">Barra</option>
<option value="Barra Bonita">Barra Bonita</option>
<option value="Barra de Guabiraba">Barra de Guabiraba</option>
<option value="Barra do Chapéu">Barra do Chapéu</option>
<option value="Barra do Corda">Barra do Corda</option>
<option value="Barra do Garças">Barra do Garças</option>
<option value="Barra do Guarita">Barra do Guarita</option>
<option value="Barra do Jacaré">Barra do Jacaré</option>
<option value="Barra do Mendes">Barra do Mendes</option>
<option value="Barra do Piraí">Barra do Piraí</option>
<option value="Barra do Quaraí">Barra do Quaraí</option>
<option value="Barra do Ribeiro">Barra do Ribeiro</option>
<option value="Barra do Rio Azul">Barra do Rio Azul</option>
<option value="Barra do Rocha">Barra do Rocha</option>
<option value="Barra do Turvo">Barra do Turvo</option>
<option value="Barra Funda">Barra Funda</option>
<option value="Barra Longa">Barra Longa</option>
<option value="Barra Mansa">Barra Mansa</option>
<option value="Barra Velha">Barra Velha</option>
<option value="Barrairas">Barrairas</option>
<option value="Barras">Barras</option>
<option value="Barreira">Barreira</option>
<option value="Barreiras">Barreiras</option>
<option value="Barreiras do Piauí">Barreiras do Piauí</option>
<option value="Barreirinha">Barreirinha</option>
<option value="Barreiros">Barreiros</option>
<option value="Barretos">Barretos</option>
<option value="Barrinha">Barrinha</option>
<option value="Barro">Barro</option>
<option value="Barro Alto">Barro Alto</option>
<option value="Barrocas">Barrocas</option>
<option value="Barrolândia">Barrolândia</option>
<option value="Barroquinha">Barroquinha</option>
<option value="Barros Cassal">Barros Cassal</option>
<option value="Barueri">Barueri</option>
<option value="Bastos">Bastos</option>
<option value="Batatais">Batatais</option>
<option value="Baturité">Baturité</option>
<option value="Bauru">Bauru</option>
<option value="Bebedouro">Bebedouro</option>
<option value="Bela Cruz">Bela Cruz</option>
<option value="Bela Vista">Bela Vista</option>
<option value="Bela Vista de Goiás">Bela Vista de Goiás</option>
<option value="Bela Vista de Minas">Bela Vista de Minas</option>
<option value="Bela Vista do Maranhão">Bela Vista do Maranhão</option>
<option value="Bela Vista do Paraíso">Bela Vista do Paraíso</option>
<option value="Belágua">Belágua</option>
<option value="Belém">Belém</option>
<option value="Belém de Maria">Belém de Maria</option>
<option value="Belém do Brejo do Cruz">Belém do Brejo do Cruz</option>
<option value="Belém do Piauí">Belém do Piauí</option>
<option value="Belford Roxo">Belford Roxo</option>
<option value="Belmiro Braga">Belmiro Braga</option>
<option value="Belo Campo">Belo Campo</option>
<option value="Belo Horizonte">Belo Horizonte</option>
<option value="Belo Jardim">Belo Jardim</option>
<option value="Belo Monte">Belo Monte</option>
<option value="Belo Oriente">Belo Oriente</option>
<option value="Belo Vale">Belo Vale</option>
<option value="Beneditinos">Beneditinos</option>
<option value="Benedito Leite">Benedito Leite</option>
<option value="Benedito Novo">Benedito Novo</option>
<option value="Benevides">Benevides</option>
<option value="Benjamin Constant">Benjamin Constant</option>
<option value="Benjamin Constant do Sul">Benjamin Constant do Sul</option>
<option value="Bento de Abreu">Bento de Abreu</option>
<option value="Bento Fernandes">Bento Fernandes</option>
<option value="Bento Gonçalves">Bento Gonçalves</option>
<option value="Bequimão">Bequimão</option>
<option value="Berilo">Berilo</option>
<option value="Berizal">Berizal</option>
<option value="Bertioga">Bertioga</option>
<option value="Bertolínia">Bertolínia</option>
<option value="Bertópolis">Bertópolis</option>
<option value="Beruri">Beruri</option>
<option value="Betim">Betim</option>
<option value="Bezerros">Bezerros</option>
<option value="Bias Fortes">Bias Fortes</option>
<option value="Biguaçu">Biguaçu</option>
<option value="Bilac">Bilac</option>
<option value="Biquinhas">Biquinhas</option>
<option value="Biritiba-Mirim">Biritiba-Mirim</option>
<option value="Biritinga">Biritinga</option>
<option value="Bituruna">Bituruna</option>
<option value="Blumenau">Blumenau</option>
<option value="Boa Esperança">Boa Esperança</option>
<option value="Boa Hora">Boa Hora</option>
<option value="Boa Nova">Boa Nova</option>
<option value="Boa Ventura">Boa Ventura</option>
<option value="Boa Ventura de São Roque">Boa Ventura de São Roque</option>
<option value="Boa Viagem">Boa Viagem</option>
<option value="Boa Vista">Boa Vista</option>
<option value="Boa Vista da Aparecida">Boa Vista da Aparecida</option>
<option value="Boa Vista do Buricá">Boa Vista do Buricá</option>
<option value="Boa Vista do Cadeado">Boa Vista do Cadeado</option>
<option value="Boa Vista do Gurupi">Boa Vista do Gurupi</option>
<option value="Boa Vista do Incra">Boa Vista do Incra</option>
<option value="Boa Vista do Ramos">Boa Vista do Ramos</option>
<option value="Boa Vista do Sul">Boa Vista do Sul</option>
<option value="Boa Vista do Tupim">Boa Vista do Tupim</option>
<option value="Boca da Mata">Boca da Mata</option>
<option value="Boca do Acre">Boca do Acre</option>
<option value="Bocaina">Bocaina</option>
<option value="Bocaina de Minas">Bocaina de Minas</option>
<option value="Bocaina do Sul">Bocaina do Sul</option>
<option value="Bocaiúva">Bocaiúva</option>
<option value="Bocaiúva do Sul">Bocaiúva do Sul</option>
<option value="Bodocó">Bodocó</option>
<option value="Bodoquena">Bodoquena</option>
<option value="Bofete">Bofete</option>
<option value="Boituva">Boituva</option>
<option value="Bom Conselho">Bom Conselho</option>
<option value="Bom Despacho">Bom Despacho</option>
<option value="Bom Jardim">Bom Jardim</option>
<option value="Bom Jardim da Serra">Bom Jardim da Serra</option>
<option value="Bom Jardim de Goiás">Bom Jardim de Goiás</option>
<option value="Bom Jardim de Minas">Bom Jardim de Minas</option>
<option value="Bom Jesus">Bom Jesus</option>
<option value="Bom Jesus da Lapa">Bom Jesus da Lapa</option>
<option value="Bom Jesus da Penha">Bom Jesus da Penha</option>
<option value="Bom Jesus da Serra">Bom Jesus da Serra</option>
<option value="Bom Jesus das Selvas">Bom Jesus das Selvas</option>
<option value="Bom Jesus de Goiás">Bom Jesus de Goiás</option>
<option value="Bom Jesus do Amparo">Bom Jesus do Amparo</option>
<option value="Bom Jesus do Araguaia">Bom Jesus do Araguaia</option>
<option value="Bom Jesus do Galho">Bom Jesus do Galho</option>
<option value="Bom Jesus do Itabapoana">Bom Jesus do Itabapoana</option>
<option value="Bom Jesus do Norte">Bom Jesus do Norte</option>
<option value="Bom Jesus do Oeste">Bom Jesus do Oeste</option>
<option value="Bom Jesus do Sul">Bom Jesus do Sul</option>
<option value="Bom Jesus dos Perdões">Bom Jesus dos Perdões</option>
<option value="Bom Lugar">Bom Lugar</option>
<option value="Bom Princípio">Bom Princípio</option>
<option value="Bom Princípio do Piauí">Bom Princípio do Piauí</option>
<option value="Bom Progresso">Bom Progresso</option>
<option value="Bom Repouso">Bom Repouso</option>
<option value="Bom Retiro">Bom Retiro</option>
<option value="Bom Retiro do Sul">Bom Retiro do Sul</option>
<option value="Bom Sucesso">Bom Sucesso</option>
<option value="Bom Sucesso de Itararé">Bom Sucesso de Itararé</option>
<option value="Bom Sucesso do Sul">Bom Sucesso do Sul</option>
<option value="Bom Jesus do Tocantins">Bom Jesus do Tocantins</option>
<option value="Bom Jesus do Araguaia">Bom Jesus do Araguaia</option>
<option value="Bom Jesus dos Perdões">Bom Jesus dos Perdões</option>
<option value="Bom Jesus do Galho">Bom Jesus do Galho</option>
<option value="Bom Jesus da Penha">Bom Jesus da Penha</option>
<option value="Bom Jesus da Serra">Bom Jesus da Serra</option>
<option value="Bom Jesus do Amparo">Bom Jesus do Amparo</option>
<option value="Bom Jesus do Araguaia">Bom Jesus do Araguaia</option>
<option value="Bom Jesus do Itabapoana">Bom Jesus do Itabapoana</option>
<option value="Bom Jesus do Norte">Bom Jesus do Norte</option>
<option value="Bom Jesus do Oeste">Bom Jesus do Oeste</option>
<option value="Bom Jesus do Sul">Bom Jesus do Sul</option>
<option value="Bom Jesus dos Perdões">Bom Jesus dos Perdões</option>
<option value="Bom Lugar">Bom Lugar</option>
<option value="Bom Princípio">Bom Princípio</option>
<option value="Bom Princípio do Piauí">Bom Princípio do Piauí</option>
<option value="Bom Progresso">Bom Progresso</option>
<option value="Bom Repouso">Bom Repouso</option>
<option value="Bom Retiro">Bom Retiro</option>
<option value="Bom Retiro do Sul">Bom Retiro do Sul</option>
<option value="Bom Sucesso">Bom Sucesso</option>
<option value="Bom Sucesso de Itararé">Bom Sucesso de Itararé</option>
<option value="Bom Sucesso do Sul">Bom Sucesso do Sul</option>
<option value="Bomba">Bomba</option>
<option value="Bombeiro Militar">Bombeiro Militar</option>
<option value="Bonfim">Bonfim</option>
<option value="Bonfim do Piauí">Bonfim do Piauí</option>
<option value="Bonfinópolis">Bonfinópolis</option>
<option value="Bonfinópolis de Minas">Bonfinópolis de Minas</option>
<option value="Boninal">Boninal</option>
<option value="Bonito">Bonito</option>
<option value="Bonito de Minas">Bonito de Minas</option>
<option value="Bonito de Santa Fé">Bonito de Santa Fé</option>
<option value="Bonito de Minas">Bonito de Minas</option>
<option value="Bonópolis">Bonópolis</option>
<option value="Boqueirão">Boqueirão</option>
<option value="Boqueirão do Leão">Boqueirão do Leão</option>
<option value="Boqueirão do Piauí">Boqueirão do Piauí</option>
<option value="Boqueirão do Riacho">Boqueirão do Riacho</option>
<option value="Boqueirão dos Cochos">Boqueirão dos Cochos</option>
<option value="Boquim">Boquim</option>
<option value="Boquira">Boquira</option>
<option value="Borá">Borá</option>
<option value="Boraceia">Boraceia</option>
<option value="Borba">Borba</option>
<option value="Borborema">Borborema</option>
<option value="Borda da Mata">Borda da Mata</option>
<option value="Borebi">Borebi</option>
<option value="Borrazópolis">Borrazópolis</option>
<option value="Borá">Borá</option>
<option value="Boraceia">Boraceia</option>
<option value="Borba">Borba</option>
<option value="Borborema">Borborema</option>
<option value="Borda da Mata">Borda da Mata</option>
<option value="Borebi">Borebi</option>
<option value="Borrazópolis">Borrazópolis</option>
<option value="Bossoroca">Bossoroca</option>
<option value="Botelhos">Botelhos</option>
<option value="Botucatu">Botucatu</option>
<option value="Botumirim">Botumirim</option>
<option value="Botuporã">Botuporã</option>
<option value="Botuverá">Botuverá</option>
<option value="Bozano">Bozano</option>
<option value="Braço do Norte">Braço do Norte</option>
            <option value="Adamantina">Adamantina</option>
            </select>

            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- estado -->
        <div>
            <x-input-label for="estado" :value="__('estado')" />
            <select id="estado" class="block mt-1 w-full" name="estado" required>
             <!-- AC - Acre -->
            <option value="AC">Acre</option>

             <!-- AL - Alagoas -->
            <option value="AL">Alagoas</option>

              <!-- AP - Amapá -->
            <option value="AP">Amapá</option>

              <!-- AM - Amazonas -->
            <option value="AM">Amazonas</option>

              <!-- BA - Bahia -->
            <option value="BA">Bahia</option>

             <!-- CE - Ceará -->
            <option value="CE">Ceará</option>

             <!-- DF - Distrito Federal -->
            <option value="DF">Distrito Federal</option>

             <!-- ES - Espírito Santo -->
            <option value="ES">Espírito Santo</option>

             <!-- GO - Goiás -->
            <option value="GO">Goiás</option>

             <!-- MA - Maranhão -->
            <option value="MA">Maranhão</option>

             <!-- MT - Mato Grosso -->
            <option value="MT">Mato Grosso</option>

             <!-- MS - Mato Grosso do Sul -->
            <option value="MS">Mato Grosso do Sul</option>

             <!-- MG - Minas Gerais -->
            <option value="MG">Minas Gerais</option>

             <!-- PA - Pará -->
            <option value="PA">Pará</option>

             <!-- PB - Paraíba -->
            <option value="PB">Paraíba</option>

             <!-- PR - Paraná -->
            <option value="PR">Paraná</option>

             <!-- PE - Pernambuco -->
            <option value="PE">Pernambuco</option>

             <!-- PI - Piauí -->
            <option value="PI">Piauí</option>

             <!-- RJ - Rio de Janeiro -->
            <option value="RJ">Rio de Janeiro</option>

             <!-- RN - Rio Grande do Norte -->
            <option value="RN">Rio Grande do Norte</option>

             <!-- RS - Rio Grande do Sul -->
            <option value="RS">Rio Grande do Sul</option>

             <!-- RO - Rondônia -->
            <option value="RO">Rondônia</option>

             <!-- RR - Roraima -->
            <option value="RR">Roraima</option>

             <!-- SC - Santa Catarina -->
            <option value="SC">Santa Catarina</option>

             <!-- SP - São Paulo -->
            <option value="SP">São Paulo</option>

             <!-- SE - Sergipe -->
            <option value="SE">Sergipe</option>

             <!-- TO - Tocantins -->
            <option value="TO">Tocantins</option>
        </select>
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <!-- telefone -->
        <div>
            <x-input-label for="telefone" :value="__('telefone')" />
            <x-text-input  id="telefone" class="block mt-1 w-full" type="tel" placeholder="(00) 0000-0000" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone"  />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- celular -->
        <div>
            <x-input-label for="celular" :value="__('celular')" />
            <x-text-input  id="celular" class="block mt-1 w-full" type="tel" name="celular" placeholder="(00) 00000-0000" :value="old('celular')" required autofocus autocomplete="celular"  />
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Digite seu email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
