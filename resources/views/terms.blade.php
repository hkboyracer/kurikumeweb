@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => '利用規約'])

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
 
      <h1 class="mt-5 text-center" style="color:#848484; font-size:22px;">利⽤規約</h1>
      <p class="welcome-introduction mb-3 text-left" style="font-size:19px;">この利⽤規約（以下，「本規約」といいます。）は，くっりく ME（以下，「当社」といいます。）がこのウェブサイト上で提供するサービス（以下，「本サービス」といいます。）の利⽤条件を定めるものです。登録ユーザーの皆さま（以下，「ユ ーザー」といいます。）には，本規約に従って，本サービスをご利⽤いただきます。</p>
    
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 1 条 適⽤</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当本規約は，ユーザーと当社との間の本サービスの利⽤に関わる⼀切の関係に適⽤されるものとします。</li>
        <li class='nav-item'>2. 当社は本サービスに関し，本規約のほか，ご利⽤にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の⼀部を構成するものとします。</li>
        <li class='nav-item'>3. 本規約の規定が前条の個別規定の規定と⽭盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。</li>
      
      </ul>

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 2 条 利⽤登録</h2>

      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 本サービスにおいては，登録希望者が本規約に同意の上，当社の定める⽅法によって利⽤登録を申請し，当社がこの承認を登録希望者に通知することによって，利⽤登録が完了するものとします。</li>
        <li class='nav-item'>2. 本サービスにおいては，登録希望者が本規約に同意の上，当社の定める⽅法によって利⽤登録を申請し，当社がこの承認を登録希望者に通知することによって，利⽤登録が完了するものとします。
          <ul>
            <li> 利⽤登録の申請に際して虚偽の事項を届け出た場合</li>
            <li> 本規約に違反したことがある者からの申請である場合</li>
            <li> その他，当社が利⽤登録を相当でないと判断した場合</li>
          </ul>
        </li>
      
      </ul>

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 3 条 利ユーザーID およびパスワードの管理</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. ユーザーは，⾃⼰の責任において，本サービスのユーザーID およびパスワードを適切に管理するものとします。</li>
        <li class='nav-item'>2. ユーザーは，いかなる場合にも，ユーザーID およびパスワードを第三者に譲渡または貸与し，もしくは第三者と共⽤することはできません。当社は，ユーザーID とパスワードの組み合わせが登録情報と⼀致してログインされた場合，そのユーザーIDを登録しているユーザー⾃⾝による利⽤とみなします。</li>
        <li class='nav-item'>3. ユーザーID 及びパスワードが第三者によって使⽤されたことによって⽣じた損害は，当社に故意⼜は重⼤な過失がある場合を除き，当社は⼀切の責任を負わないものとします。</li>
      
      </ul>  
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 4 条 禁⽌事項</h2>
      <p>ユーザーは，本サービスの利⽤にあたり，以下の⾏為をしてはなりません。</p>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 法令または公序良俗に違反する⾏為</li>
        <li class='nav-item'>2. 犯罪⾏為に関連する⾏為</li>
        <li class='nav-item'>3. 当社、本サービスの他のユーザー、または第三者のサーバーまたはネットワークの 機能を破壊したり、妨害したりする⾏為</li>
        <li class='nav-item'>4. 当社のサービスの運営を妨害するおそれのある⾏為 </li>
        <li class='nav-item'>5. 他のユーザーに関する個⼈情報等を収集または蓄積する⾏為</li>
        <li class='nav-item'>6. 不正アクセスをし、またはこれを試みる⾏為</li>
        <li class='nav-item'>7. 他のユーザーに成りすます⾏為</li>
        <li class='nav-item'>8. 当社のサービスに関連して、反社会的勢⼒に対して直接または間接に利益を供与する⾏為</li>
        <li class='nav-item'>9. 当社、本サービスの他のユーザーまたは第三者の知的財産権、肖像権、プライバシー、名誉その他の権利または利益を侵害する⾏為</li>
        <li class='nav-item'>10. 以下の表現を含み、または含むと当社が判断する内容を本サービスに投稿し、または送信する⾏為
          <ul>
            <li>適度に暴⼒的な表現</li>
            <li>露⾻な性的表現</li>
            <li>⼈種、国籍、信条、性別、社会的⾝分、⾨地などによる差別につながる表現</li>
            <li>⾃殺、⾃殺⾏為、薬物乱⽤を誘引または助⻑する表現</li>
            <li>その他反社会的な内容を含み他⼈に不快感を与える表現</li>
          </ul>
        </li>
        <li class='nav-item'>11. 以下を⽬的とし、または⽬的とすると当社が判断する⾏為
          <ul>
            <li>営業、宣伝、広告、勧誘、その他営利を⽬的とする⾏為（当社の認めたものを除きます。</li>
            <li>性⾏為やわいせつな⾏為を⽬的とする⾏為</li>
            <li>⾯識のない異性との出会いや交際を⽬的とする⾏為</li>
            <li>他のユーザーに対する嫌がらせや誹謗中傷を⽬的とする⾏為</li>
            <li>当社、本サービスの他のユーザー、または第三者に不利益、損害または不快感を与えることを⽬的とする⾏為</li>
            <li>その他本サービスが予定している利⽤⽬的と異なる⽬的で本サービスを利⽤する⾏為</li>
          </ul>
        </li>

      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 5 条 本サービスの提供の停⽌等</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は、以下のいずれかの事由があると判断した場合、ユーザーに事前に通知することなく本サービスの全部または⼀部の提供を停⽌または中断することができるものとします。
          <ul>
            <li>本サービスのかかるコンピューターシステムの保守点検または更新を⾏う場合</li>
            <li>地震、落雷、⽕災、停電または天災などの不可抗⼒により、本サービスの提供が困難となった場合</li>
            <li>コンピューターまたは通信回線等が事故により停⽌した場合</li>
            <li>その他、当社が本サービスの提供が困難と判断した場合</li>
          </ul>
        </li>
        <li class='nav-item'>2. 当社は、本サービスの提供の停⽌または中断により、ユーザーまたは第三者が被ったいかなる不利益または損害についても、⼀切の責任を負わないものとします。</li>
      
      </ul>  

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 6 条 著作権</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は、以下のいずれかの事由があると判断した場合、ユーザーに事前に通知することなく本サービスの全部または⼀部の提供を停⽌または中断することができるものとします。</li>
        <li class='nav-item'>2. ユーザーが本サービスを利⽤して投稿ないしアップロードした⽂章、画像、映像等の著作権については、当該ユーザーその他既存の権利者に留保されているものとします。但し、当社は、本サービスを利⽤して投稿ないしアップロードされた⽂章，画像，映像等について，本サービスの改良，品質の向上，または不備の是正等ならびに本サービスの周知宣伝等に必要な範囲で利⽤できるものとし，ユーザーは，この利⽤に関して，著作者⼈格権を⾏使しないものとします。</li>
        <li class="nav-item">3. 前項本⽂の定めるものを除き，本サービスおよび本サービスに関連する⼀切の情報についての著作権およびその他の知的財産権はすべて当社または当社にその利⽤を許諾した権利者に帰属し，ユーザーは無断で複製，譲渡，貸与，翻訳，改変，転載，公衆送信（送信可能化を含みます。），伝送，配布，出版，営業使⽤等をしてはならないものとします。</li>
      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 7 条 利⽤制限および登録抹消</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は，ユーザーが以下のいずれかに該当する場合には，事前の通知なく，投稿データを削除し，ユーザーに対して本サービスの全部もしくは⼀部の利⽤を制限し。またはユーザーとしての登録を抹消することができるものとします。
          <ul>
            <li>本規約のいずれかの条項に違反した場合</li>
            <li>登録事項に虚偽の事実があることが判明した場合</li>
            <li>当社からの連絡に対し、⼀定期間返答がない場合</li>
            <li>本サービスについて、最終の利⽤から⼀定期間利⽤がない場合</li>
            <li>その他、当社が本サービスの利⽤を適当でないと判断した場合</li>
          </ul>
        </li>
        <li class='nav-item'>2. 当社は，本条に基づき当社が⾏った⾏為によりユーザーに⽣じた損害について，⼀切の責任を負いません。</li>
      </ul>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 8 条 退会</h2>
      <p>ユーザーは、当社の定める退会⼿続により、本サービスから退会できるものとします。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> 第 9 条 保証の否認および免責事項</h2>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 当社は，本サービスに事実上または法律上の瑕疵（安全性，信頼性，正確性，完全性，有効性，特定の⽬的への適合性，セキュリティなどに関する⽋陥，エラーやバグ，権利侵害などを含みます。）がないことを明⽰的にも黙⽰的にも保証しておりません。。</li>
        <li class='nav-item'>2. 当社は，本サービスに起因してユーザーに⽣じたあらゆる損害について⼀切の責任を負いません。ただし，本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合，この免責規定は適⽤されません。</li>
        <li class="nav-item">3. 前項ただし書に定める場合であっても，当社は，当社の過失（重過失を除きます。）による債務不履⾏または不法⾏為によりユーザーに⽣じた損害のうち特別な事情から⽣じた損害（当社またはユーザーが損害発⽣につき予⾒し，または予⾒し得た場合を含みます。）について⼀切の責任を負いません。また，当社の過失（重過失を除きます。）による債務不履⾏または不法⾏為によりユーザーに⽣じた損害の賠償は，ユーザーから当該損害が発⽣した⽉に受領した利⽤料の額を上限とします。</li>
        <li class="nav-item">4. 当社は，本サービスに関して，ユーザーと他のユーザーまたは第三者との間において⽣じた取引，連絡または紛争等について⼀切責任を負いません。</li>
      </ul> 

      <h2 class="py-3" style="color:#848484; font-size:20px;">第 10 条 サービス内容の変更等</h2>
      <p>当社は、ユーザーに通知することなく、本サービスの内容を変更し、または本サービスの提供を中⽌することができるものとし、これによってユーザーに⽣じた損害について⼀切の責任を負いません。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;">第 11 条 利⽤規約の変更</h2>
      <p>当社は，必要と判断した場合には，ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお，本規約の変更後，本サービスの利⽤を開始した場合には，当該ユーザーは変更後の規約に同意したものとみなします。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;">第 12 条 個⼈情報の取り扱い</h2>
      <p>当社は，本サービスの利⽤によって取得する個⼈情報については，当社「プライバシーポリシー」に従い適切に取り扱うものとします。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;">第 13 条 通知または連絡</h2>
      <p>ユーザーと当社との間の通知または連絡は，当社の定める⽅法によって⾏うものとします。当社は,ユーザーから,当社が別途定める⽅式に従った変更届け出がない限り,現在登録されている連絡先が有効なものとみなして当該連絡先へ通知または連絡を⾏い,これらは,発信時にユーザーへ到達したものとみなします。</p>
     
      <h2 class="py-3" style="color:#848484; font-size:20px;">第 14 条 権利義務の譲渡の禁⽌</h2>
      <p>ユーザーは，当社の書⾯による事前の承諾なく，利⽤契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し，または担保に供することはできません。</p>
    
      <h2 class="py-3" style="color:#848484; font-size:20px;">第 15 条 準拠法・裁判管轄</h2>
      <p>本規約の解釈にあたっては、<span style="color:red;">⾹港の法律</span>を準拠法とします。</p>

    </div>

@endsection