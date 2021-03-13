@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => 'プライバシーポリシー'])

@section('content')
@include('layouts.headers.guest')

<style>
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>
<style>

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

</style>

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

    <div class="container mt--8 pb-5">
 
      <h1 class="mt-5 text-center" style="color:#848484; font-size:22px;">プライバシーポリシー</h1>
      <p class="welcome-introduction mb-3 text-left" style="font-size:16px;">くっりく ME（以下，「当社」といいます。）は、本ウェブサイト上で提供するサー
ビス（以下、「本サービス」といいます。）における、ユーザーの個⼈情報の取扱
いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいま
す。）を定めます。</p>
    
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 1 条 個⼈情報</h2>
      <p>「個⼈情報」とは、個⼈情報保護法にいう「個⼈情報」を指すものとし、⽣存する
個⼈に関する情報であって、当該情報に含まれる⽒名、⽣年⽉⽇、住所、電話番
号，連絡先その他の記述等により特定の個⼈を識別できる情報及び容貌、指紋、声
紋にかかるデータ、及び健康保険証の保険者番号などの当該情報単体から特定の個
⼈を識別できる情報（個⼈識別情報）を指します。</p>

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 2 条 個⼈情報の収集⽅法</h2>
      <p>当社は、ユーザーが利⽤登録をする際に⽒名、⽣年⽉⽇、住所、電話番号、メール
アドレス、運転免許証番号などの個⼈情報をお尋ねすることがあります。また、ユ
ーザーと提携先などとの間でなされたユーザーの個⼈情報を含む取引記録や決済に
関する情報を、当社の提携先（情報提供元、広告主、広告配信先などを含みます。
以下、｢提携先｣といいます。）などから収集することがあります。</p>

     

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 3 条 個⼈情報を収集・利⽤する⽬的</h2>
      <p>当社が個⼈情報を収集・利⽤する⽬的は、以下のとおりです。</p>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社サービスの提供・運営のため</li>
        <li class='nav-item'>2. ユーザーからのお問い合わせに回答するため（本⼈確認を⾏うことを含む）</li>
        <li class='nav-item'>3. ユーザーが利⽤中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため </li>
        <li class='nav-item'>4. メンテナンス，重要なお知らせなど必要に応じたご連絡のため </li>
        <li class='nav-item'>5. 利⽤規約に違反したユーザーや，不正・不当な⽬的でサービスを利⽤しようとするユーザーの特定をし，ご利⽤をお断りするため </li>
        <li class='nav-item'>6. ユーザーにご⾃⾝の登録情報の閲覧や変更，削除，ご利⽤状況の閲覧を⾏っていただくため </li>
        <li class='nav-item'>7. 上記の利⽤⽬的に付随する⽬的。 </li>
      
      </ul>  
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 4 条 利⽤⽬的の変更</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は，利⽤⽬的が変更前と関連性を有すると合理的に認められる場合に限り，個⼈情報の利⽤⽬的を変更するものとします。</li>
        <li class='nav-item'>2. 利⽤⽬的の変更を⾏った場合には，変更後の⽬的について，当社所定の⽅法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</li>
        

      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 5 条 個⼈情報の第三者提供</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個⼈情報を提供することはありません。ただし，個⼈情報保護法その他の法令で認められる場合を除きます。</li>
          <ul>
            <li>⼈の⽣命，⾝体または財産の保護のために必要がある場合であって，本⼈の同意を得ることが困難であるとき</li>
            <li>公衆衛⽣の向上または児童の健全な育成の推進のために特に必要がある場合であって，本⼈の同意を得ることが困難であるとき</li>
            <li>国の機関もしくは地⽅公共団体またはその委託を受けた者が法令の定める事務を遂⾏することに対して協⼒する必要がある場合であって，本⼈の同意を得ることにより当該事務の遂⾏に⽀障を及ぼすおそれがあるとき</li>
            <li>国の機関もしくは地⽅公共団体またはその委託を受けた者が法令の定める事務を遂⾏することに対して協⼒する必要がある場合であって，本⼈の同意を得ることにより当該事務の遂⾏に⽀障を及ぼすおそれがあるとき
              <ul>
                <li>利⽤⽬的に第三者への提供を含むこと</li>
                <li>第三者に提供されるデータの項⽬</li>
                <li>第三者への提供の⼿段または⽅法</li>
                <li>本⼈の求めに応じて個⼈情報の第三者への提供を停⽌すること</li>
                <li>本⼈の求めを受け付ける⽅法</li>
              </ul>
            </li>
          </ul>
        </li>
        <li class='nav-item'>2. 前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。
          <ul>
            <li>当社が利⽤⽬的の達成に必要な範囲内において個⼈情報の取扱いの全部または⼀部を委託する場合</li>
            <li>合併その他の事由による事業の承継に伴って個⼈情報が提供される場合</li>
            <li>個⼈情報を特定の者との間で共同して利⽤する場合であって，その旨並びに共同して利⽤される個⼈情報の項⽬，共同して利⽤する者の範囲，利⽤する者の利⽤⽬的および当該個⼈情報の管理について責任を有する者の⽒名または名称について，あらかじめ本⼈に通知し，または本⼈が容易に知り得る状態に置いた場合</li>
          </ul>
        </li>
      
      </ul>  

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 6 条 個⼈情報の開⽰</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は，本⼈から個⼈情報の開⽰を求められたときは，本⼈に対し，遅滞なくこれを開⽰します。ただし，開⽰することにより次のいずれかに該当する場合は，その全部または⼀部を開⽰しないこともあり，開⽰しない決定をした場合には，その旨を遅滞なく通知します。<span style="color:red;">なお，個⼈情報の開⽰に際しては，1 件あたり XXX 円の⼿数料を申し受けます。（TBC）</span>
          <ul>
            <li>本⼈または第三者の⽣命、⾝体、財産その他の権利利益を害するおそれがある場合</li>
            <li>当社の業務の適切な実施に著しい⽀障を及ぼすおそれがある場合</li>
            <li>その他法令に違反することとなる場合</li>
          </ul>
        </li>
        <li class='nav-item'>2. 前項の定めにかかわらず、履歴情報及び特性情報などの個⼈情報以外の情報については、原則として開⽰いたしません。</li>
      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 7 条 個⼈情報の訂正および削除</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. ユーザーは、当社の保有する⾃⼰の個⼈情報が誤った情報である場合には，当社が定める⼿続きにより、当社に対して個⼈情報の訂正、追加または削除（以下、「訂正等」といいます。）を請求することができます。 </li>
        <li class='nav-item'>2. 当社は、ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には、遅滞なく、当該個⼈情報の訂正等を⾏うものとします。</li>
        <li class='nav-item'>3. 当社は、前項の規定に基づき訂正等を⾏った場合、または訂正等を⾏わない旨の決定をしたときは遅滞なく、これをユーザーに通知します。</li>
      </ul>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 8 条 個⼈情報の利⽤停⽌等</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は、本⼈から個⼈情報が利⽤⽬的の範囲を超えて取り扱われているとい
う理由、または不正の⼿段により取得されたものであるという理由により、
その利⽤の停⽌または消去（以下、「利⽤停⽌等」といいます。）を求めら
れた場合には、遅滞なく必要な調査を⾏います。</li>
        <li class='nav-item'>2. 前項の調査結果に基づき、その請求に応じる必要があると判断した場合に
は、遅滞なく、当該個⼈情報の利⽤停⽌等を⾏います。</li>
        <li class="nav-item">3. 当社は、前項の規定に基づき利⽤停⽌等を⾏った場合、または利⽤停⽌等を
⾏わない旨の決定をしたときは遅滞なく、これをユーザーに通知します。</li>
        <li class="nav-item">4. 前 2 項にかかわらず、利⽤停⽌等に多額の費⽤を有する場合、その他利⽤停
⽌等を⾏うことが困難な場合であって、ユーザーの権利利益を保護するため
に必要なこれに代わるべき措置をとれる場合は、この代替策を講じるものと
します。</li>
      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;">第 9 条 プライバシーポリシーの変更</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 本ポリシーの内容は、法令、その他本ポリシーに別段の定めのある事項を除
いて、ユーザーに通知することなく、変更することができるものとします。 </li>
        <li class='nav-item'>2. 当社が別途定める場合を除いて、変更後のプライバシーポリシーは、本ウェ
ブサイトに掲載したときから効⼒を⽣じるものとします。</li>
      </ul>
      
     <ul></ul>
    </div>

@endsection
