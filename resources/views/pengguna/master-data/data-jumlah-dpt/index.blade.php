@extends('pengguna.layouts.app')
@section('title', 'Data Jumlah DPT | Master Data | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Data Jumlah DPT | Master Data</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                <li class="breadcrumb-item"><a href="#">Data Jumlah DPT</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="table-responsive">
        <table id="data_tps_table" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Laki - Laki</th>
                    <th>Perempuan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ACEH</td>
                    <td>1839412</td>
                    <td>1902625</td>
                    <td>3742037</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SUMATERA UTARA</td>
                    <td>5360844</td>
                    <td>5493096</td>
                    <td>10853940</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SUMATERA BARAT</td>
                    <td>2207360</td>
                    <td>2061246</td>
                    <td>4088606</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>RIAU</td>
                    <td>2399163</td>
                    <td>2333011</td>
                    <td>4732174</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>KEPULAUAN RIAU</td>
                    <td>753535</td>
                    <td>747439</td>
                    <td>1500974</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>KEPULAUAN BANGKA BELITUNG</td>
                    <td>543663</td>
                    <td>523771</td>
                    <td>1067434</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>JAMBI</td>
                    <td>1350151</td>
                    <td>1325956</td>
                    <td>2676107</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>BENGKULU</td>
                    <td>754855</td>
                    <td>739973</td>
                    <td>1494828</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>SUMATERA SELATAN</td>
                    <td>3192292</td>
                    <td>3134056</td>
                    <td>6326348</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>LAMPUNG</td>
                    <td>3326334</td>
                    <td>3212791</td>
                    <td>6539128</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>BANTEN</td>
                    <td>4460176</td>
                    <td>4382470</td>
                    <td>8842646</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>JAWA BARAT</td>
                    <td>17958814</td>
                    <td>17756087</td>
                    <td>35714901</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>DKI JAKARTA</td>
                    <td>4080601</td>
                    <td>4172296</td>
                    <td>8252897</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>JAWA TENGAH</td>
                    <td>14113893</td>
                    <td>14175520</td>
                    <td>28289413</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>DI YOGYAKARTA</td>
                    <td>1397099</td>
                    <td>1473875</td>
                    <td>2881969</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>JAWA TIMUR</td>
                    <td>15.427.242 </td>
                    <td>15873241</td>
                    <td>31402838</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>BALI</td>
                    <td>1617276</td>
                    <td>1652240</td>
                    <td>3269516</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Nusa Tenggara Barat (NTB)</td>
                    <td>1916798</td>
                    <td>2001493</td>
                    <td>3918291</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Nusa Tenggara Timur (NTT)</td>
                    <td>1971831</td>
                    <td>2036644</td>
                    <td>4008475</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>KALIMANTAN SELATAN</td>
                    <td>1512186</td>
                    <td>1513034</td>
                    <td>3025220</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>KALIMANTAN BARAT</td>
                    <td>2017565</td>
                    <td>1940996</td>
                    <td>3968561</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>KALIMANTAN TENGAH</td>
                    <td>995097</td>
                    <td>950019</td>
                    <td>1935166</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>KALIMANTAN TIMUR</td>
                    <td>1435916</td>
                    <td>1.342.728 </td>
                    <td>2778644</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>KALIMANTAN UTARA</td>
                    <td>263000</td>
                    <td>241252</td>
                    <td>504251</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>SULAWESI UTARA</td>
                    <td>993863</td>
                    <td>975740</td>
                    <td>1969603</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>GORONTALO</td>
                    <td>438682</td>
                    <td>442524</td>
                    <td>881206</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>SULAWESI TENGAH</td>
                    <td>1140466</td>
                    <td>1096237</td>
                    <td>2236703</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>SULAWESI BARAT</td>
                    <td>494660</td>
                    <td>491100</td>
                    <td>985760</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>SULAWESI SELATAN</td>
                    <td>3244626</td>
                    <td>3425956</td>
                    <td>6670582</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>SULAWESI TENGGARA</td>
                    <td>931298</td>
                    <td> 936.633</td>
                    <td>1867931</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>MALUKU</td>
                    <td>658058</td>
                    <td>682954</td>
                    <td>1341012</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>MALUKU UTARA</td>
                    <td>490478</td>
                    <td>463500</td>
                    <td>953978</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>PAPUA</td>
                    <td>370861</td>
                    <td>356974</td>
                    <td>727835</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>PAPUA TENGAH</td>
                    <td>604549</td>
                    <td>524195</td>
                    <td>1128844</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>PAPUA BARAT</td>
                    <td>196570</td>
                    <td>188895</td>
                    <td>385465</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>PAPUA BARAT DAYA</td>
                    <td>227823</td>
                    <td>213003</td>
                    <td>440826</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>PAPUA PEGUNUNGAN</td>
                    <td>701582</td>
                    <td>604832</td>
                    <td>1304414</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>PAPUA SELATAN</td>
                    <td>190310</td>
                    <td>176959</td>
                    <td>367269</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
@endsection

@section('js')

@endsection
