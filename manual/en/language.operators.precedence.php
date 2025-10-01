<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Operator Precedence - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.precedence.php">
 <link rel="shorturl" href="https://www.php.net/operators.precedence">
 <link rel="alternate" href="https://www.php.net/operators.precedence" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.arithmetic.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.precedence.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.precedence.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.precedence.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.precedence.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.precedence.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.precedence.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.precedence.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.precedence.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.precedence.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.precedence.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.precedence.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Operator Precedence" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Operator Precedence - Manual" />
<meta name="twitter:description" content="Operator Precedence" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Operator Precedence - Manual" />
<meta itemprop="description" content="Operator Precedence" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Operator Precedence" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="language.operators.arithmetic.php">
          Arithmetic &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.php">
          &laquo; Operators        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/language.operators.precedence.php' selected="selected">English</option>
            <option value='de/language.operators.precedence.php'>German</option>
            <option value='es/language.operators.precedence.php'>Spanish</option>
            <option value='fr/language.operators.precedence.php'>French</option>
            <option value='it/language.operators.precedence.php'>Italian</option>
            <option value='ja/language.operators.precedence.php'>Japanese</option>
            <option value='pt_BR/language.operators.precedence.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.precedence.php'>Russian</option>
            <option value='tr/language.operators.precedence.php'>Turkish</option>
            <option value='uk/language.operators.precedence.php'>Ukrainian</option>
            <option value='zh/language.operators.precedence.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.precedence" class="sect1">
 <h2 class="title">Operator Precedence</h2>
 
 <p class="para">
  The precedence of an operator specifies how &quot;tightly&quot; it binds two
  expressions together. For example, in the expression <code class="literal">1 +
  5 * 3</code>, the answer is <code class="literal">16</code> and not
  <code class="literal">18</code> because the multiplication (&quot;*&quot;) operator
  has a higher precedence than the addition (&quot;+&quot;) operator.
  Parentheses may be used to force precedence, if necessary. For
  instance: <code class="literal">(1 + 5) * 3</code> evaluates to
  <code class="literal">18</code>.
 </p>
 <p class="para">
  When operators have equal precedence their associativity decides
  how the operators are grouped. For example &quot;-&quot; is left-associative, so
  <code class="literal">1 - 2 - 3</code> is grouped as <code class="literal">(1 - 2) - 3</code>
  and evaluates to <code class="literal">-4</code>. &quot;=&quot; on the other hand is
  right-associative, so <code class="literal">$a = $b = $c</code> is grouped as
  <code class="literal">$a = ($b = $c)</code>.
 </p>
 <p class="para">
  Operators of equal precedence that are non-associative cannot be used
  next to each other, for example <code class="literal">1 &lt; 2 &gt; 1</code> is
  illegal in PHP. The expression <code class="literal">1 &lt;= 1 == 1</code> on the
  other hand is legal, because the <code class="literal">==</code> operator has a lower
  precedence than the <code class="literal">&lt;=</code> operator.
 </p>
 <p class="para">
  Associativity is only meaningful for binary (and ternary) operators.
  Unary operators are either prefix or postfix so this notion is not applicable.
  For example <code class="literal">!!$a</code> can only be grouped as <code class="literal">!(!$a)</code>.
 </p>
 <p class="para">
  Use of parentheses, even when not strictly necessary, can often increase
  readability of the code by making grouping explicit rather than relying
  on the implicit operator precedence and associativity.
 </p>
 <p class="para">
  The following table lists the operators in order of precedence, with
  the highest-precedence ones at the top. Operators on the same line
  have equal precedence, in which case associativity decides grouping.
  <table class="doctable table">
   <caption><strong>Operator Precedence</strong></caption>
   
    <thead>
     <tr>
      <th>Associativity</th>
      <th>Operators</th>
      <th>Additional Information</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>(n/a)</td>
      <td>
       <code class="literal">clone</code>
       <code class="literal">new</code>
      </td>
      <td><a href="language.oop5.cloning.php" class="link">clone</a> and <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new</a></td>
     </tr>

     <tr>
      <td>right</td>
      <td><code class="literal">**</code></td>
      <td><a href="language.operators.arithmetic.php" class="link">arithmetic</a></td>
     </tr>

     <tr>
      <td>(n/a)</td>
      <td>
       <code class="literal">+</code>
       <code class="literal">-</code>
       <code class="literal">++</code>
       <code class="literal">--</code>
       <code class="literal">~</code>
       <code class="literal">(int)</code>
       <code class="literal">(float)</code>
       <code class="literal">(string)</code>
       <code class="literal">(array)</code>
       <code class="literal">(object)</code>
       <code class="literal">(bool)</code>
       <code class="literal">@</code>
      </td>
      <td>
       <a href="language.operators.arithmetic.php" class="link">arithmetic</a> (unary <code class="literal">+</code> and <code class="literal">-</code>),
       <a href="language.operators.increment.php" class="link">increment/decrement</a>,
       <a href="language.operators.bitwise.php" class="link">bitwise</a>,
       <a href="language.types.type-juggling.php#language.types.typecasting" class="link">type casting</a> and
       <a href="language.operators.errorcontrol.php" class="link">error control</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">instanceof</code></td>
      <td>
       <a href="language.operators.type.php" class="link">type</a>
      </td>
     </tr>

     <tr>
      <td>(n/a)</td>
      <td><code class="literal">!</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td>
       <code class="literal">*</code>
       <code class="literal">/</code>
       <code class="literal">%</code>
      </td>
      <td>
       <a href="language.operators.arithmetic.php" class="link">arithmetic</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td>
       <code class="literal">+</code>
       <code class="literal">-</code>
       <code class="literal">.</code>
      </td>
      <td>
       <a href="language.operators.arithmetic.php" class="link">arithmetic</a> (binary <code class="literal">+</code> and <code class="literal">-</code>),
       <a href="language.operators.array.php" class="link">array</a> and
       <a href="language.operators.string.php" class="link">string</a> (<code class="literal">.</code> prior to PHP 8.0.0)
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td>
       <code class="literal">&lt;&lt;</code>
       <code class="literal">&gt;&gt;</code>
      </td>
      <td>
       <a href="language.operators.bitwise.php" class="link">bitwise</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">.</code></td>
      <td>
       <a href="language.operators.string.php" class="link">string</a> (as of PHP 8.0.0)
      </td>
     </tr>

     <tr>
      <td>non-associative</td>
      <td>
       <code class="literal">&lt;</code>
       <code class="literal">&lt;=</code>
       <code class="literal">&gt;</code>
       <code class="literal">&gt;=</code>
      </td>
      <td>
       <a href="language.operators.comparison.php" class="link">comparison</a>
      </td>
     </tr>

     <tr>
      <td>non-associative</td>
      <td>
       <code class="literal">==</code>
       <code class="literal">!=</code>
       <code class="literal">===</code>
       <code class="literal">!==</code>
       <code class="literal">&lt;&gt;</code>
       <code class="literal">&lt;=&gt;</code>
      </td>
      <td>
       <a href="language.operators.comparison.php" class="link">comparison</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">&amp;</code></td>
      <td>
       <a href="language.operators.bitwise.php" class="link">bitwise</a> and
       <a href="language.references.php" class="link">references</a></td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">^</code></td>
      <td>
       <a href="language.operators.bitwise.php" class="link">bitwise</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">|</code></td>
      <td>
       <a href="language.operators.bitwise.php" class="link">bitwise</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">&amp;&amp;</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">||</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

     <tr>
      <td>right</td>
      <td><code class="literal">??</code></td>
      <td>
       <a href="language.operators.comparison.php#language.operators.comparison.coalesce" class="link">null coalescing</a>
      </td>
     </tr>

     <tr>
      <td>non-associative</td>
      <td><code class="literal">? :</code></td>
      <td>
       <a href="language.operators.comparison.php#language.operators.comparison.ternary" class="link">ternary</a>
       (left-associative prior to PHP 8.0.0)
      </td>
     </tr>

     <tr>
      <td>right</td>
      <td>
       <code class="literal">=</code>
       <code class="literal">+=</code>
       <code class="literal">-=</code>
       <code class="literal">*=</code>
       <code class="literal">**=</code>
       <code class="literal">/=</code>
       <code class="literal">.=</code>
       <code class="literal">%=</code>
       <code class="literal">&amp;=</code>
       <code class="literal">|=</code>
       <code class="literal">^=</code>
       <code class="literal">&lt;&lt;=</code>
       <code class="literal">&gt;&gt;=</code>
       <code class="literal">??=</code>
      </td>
      <td>
       <a href="language.operators.assignment.php" class="link">assignment</a>
      </td>
     </tr>

     <tr>
      <td>(n/a)</td>
      <td><code class="literal">yield from</code></td>
      <td>
       <a href="language.generators.syntax.php#control-structures.yield.from" class="link">yield from</a>
      </td>
     </tr>

     <tr>
      <td>(n/a)</td>
      <td><code class="literal">yield</code></td>
      <td>
       <a href="language.generators.syntax.php#control-structures.yield" class="link">yield</a>
      </td>
     </tr>

     <tr>
      <td>(n/a)</td>
      <td><code class="literal">print</code></td>
      <td><span class="function"><a href="function.print.php" class="function">print</a></span></td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">and</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">xor</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

     <tr>
      <td>left</td>
      <td><code class="literal">or</code></td>
      <td>
       <a href="language.operators.logical.php" class="link">logical</a>
      </td>
     </tr>

    </tbody>
   
  </table>

 </p>
 <p class="para">
  <div class="example" id="example-150">
   <p><strong>Example #1 Associativity</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">3 </span><span style="color: #007700">* </span><span style="color: #0000BB">3 </span><span style="color: #007700">% </span><span style="color: #0000BB">5</span><span style="color: #007700">; </span><span style="color: #FF8000">// (3 * 3) % 5 = 4<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">$b </span><span style="color: #007700">+= </span><span style="color: #0000BB">3</span><span style="color: #007700">; </span><span style="color: #FF8000">// $a = ($b += 3) -&gt; $a = 5, $b = 5<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  The ternary operator specifically requires the use of parenthesis to
  disambiguate precedence.
 </p>
 <p class="para">
  <div class="example" id="example-151">
   <p><strong>Example #2 Explicit Precedence</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">true </span><span style="color: #007700">? </span><span style="color: #0000BB">0 </span><span style="color: #007700">: (</span><span style="color: #0000BB">true </span><span style="color: #007700">? </span><span style="color: #0000BB">1 </span><span style="color: #007700">: </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// this is not allowed since PHP 8<br />// $a = true ? 0 : true ? 1 : 2;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  Operator precedence and associativity only determine how expressions
  are grouped, they do not specify an order of evaluation. PHP does not
  (in the general case) specify in which order an expression is evaluated
  and code that assumes a specific order of evaluation should be avoided,
  because the behavior can change between versions of PHP or depending on
  the surrounding code.
  <div class="example" id="example-152">
   <p><strong>Example #3 Undefined order of evaluation</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$a</span><span style="color: #007700">++; </span><span style="color: #FF8000">// may print either 2 or 3<br /><br /></span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">] = </span><span style="color: #0000BB">$i</span><span style="color: #007700">++; </span><span style="color: #FF8000">// may set either index 1 or 2<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-153">
   <p><strong>Example #4 <code class="literal">+</code>, <code class="literal">-</code> and <code class="literal">.</code> precedence</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// this line might result in unexpected output:<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. </span><span style="color: #0000BB">$x</span><span style="color: #007700">-</span><span style="color: #0000BB">1 </span><span style="color: #007700">. </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// the desired precedence can be enforced by using parentheses:<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. (</span><span style="color: #0000BB">$x</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// this is not allowed, and throws a TypeError:<br /></span><span style="color: #007700">echo ((</span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. </span><span style="color: #0000BB">$x</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
-1, or so I hope
-1, or so I hope
Fatal error: Uncaught TypeError: Unsupported operand types: string - int
</pre></div>
   </div>
  </div>
  <div class="example" id="example-154">
   <p><strong>Example #5 Prior to PHP 8, <code class="literal">+</code>, <code class="literal">-</code> and <code class="literal">.</code> had the same precedence</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// this line might result in unexpected output:<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. </span><span style="color: #0000BB">$x</span><span style="color: #007700">-</span><span style="color: #0000BB">1 </span><span style="color: #007700">. </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// because it is evaluated like this line (prior to PHP 8.0.0):<br /></span><span style="color: #007700">echo ((</span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. </span><span style="color: #0000BB">$x</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// the desired precedence can be enforced by using parentheses:<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"x minus one equals " </span><span style="color: #007700">. (</span><span style="color: #0000BB">$x</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">) . </span><span style="color: #DD0000">", or so I hope\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
-1, or so I hope
-1, or so I hope
x minus one equals 3, or so I hope
</pre></div>
   </div>
  </div>
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Although <code class="literal">=</code> has a lower precedence than
   most other operators, PHP will still allow expressions
   similar to the following: <code class="literal">if (!$a = foo())</code>,
   in which case the return value of <code class="literal">foo()</code> is
   put into <var class="varname">$a</var>.
  </p>
 </p></blockquote>
 <div class="sect2">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       String concatenation (<code class="literal">.</code>) now has a lower precedence than
       arithmetic addition/subtraction (<code class="literal">+</code> and <code class="literal">-</code>) and
       bitwise shift left/right (<code class="literal">&lt;&lt;</code> and <code class="literal">&gt;&gt;</code>);
       previously it had the same precedence as <code class="literal">+</code> and <code class="literal">-</code>
       and a higher precedence than <code class="literal">&lt;&lt;</code> and <code class="literal">&gt;&gt;</code>.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The ternary operator (<code class="literal">? :</code>) is non-associative now;
       previously it was left-associative.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Relying on the precedence of string concatenation (<code class="literal">.</code>) relative to
       arithmetic addition/subtraction (<code class="literal">+</code> or <code class="literal">-</code>) or
       bitwise shift left/right (<code class="literal">&lt;&lt;</code> or <code class="literal">&gt;&gt;</code>),
       i.e. using them together in an unparenthesized expression, is deprecated.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Relying on left-associativity of the ternary operator (<code class="literal">? :</code>),
       i.e. nesting multiple unparenthesized ternary operators, is deprecated.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/operators/precedence.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.precedence%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.precedence&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.precedence.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117390">  <div class="votes">
    <div id="Vu117390">
    <a href="/manual/vote-note.php?id=117390&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117390">
    <a href="/manual/vote-note.php?id=117390&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117390" title="75% like this...">
    243
    </div>
  </div>
  <a href="#117390" class="name">
  <strong class="user"><em>fabmlk</em></strong></a><a class="genanchor" href="#117390"> &para;</a><div class="date" title="2015-06-02 05:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117390">
<div class="phpcode"><code><span class="html">Watch out for the difference of priority between 'and vs &amp;&amp;' or '|| vs or':<br /><span class="default">&lt;?php<br />$bool </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">&amp;&amp; </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$bool</span><span class="keyword">); </span><span class="comment">// false, that's expected<br /><br /></span><span class="default">$bool </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">and </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$bool</span><span class="keyword">); </span><span class="comment">// true, ouch!<br /></span><span class="default">?&gt;<br /></span>Because 'and/or' have lower priority than '=' but '||/&amp;&amp;' have higher.</span></code></div>
  </div>
 </div>
  <div class="note" id="128174">  <div class="votes">
    <div id="Vu128174">
    <a href="/manual/vote-note.php?id=128174&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128174">
    <a href="/manual/vote-note.php?id=128174&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128174" title="73% like this...">
    9
    </div>
  </div>
  <a href="#128174" class="name">
  <strong class="user"><em>rvwoens at gmail dot com</em></strong></a><a class="genanchor" href="#128174"> &para;</a><div class="date" title="2023-01-31 12:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128174">
<div class="phpcode"><code><span class="html">Note that ?? has a low priority, so this can lead to unexpected results:<br /><br />$a=[];<br />$a['aa']??'not set' <br />--&gt; not set (as expected)<br /><br />but<br />"lets see if it is set".$a['aa']??'not set'<br />--&gt; notice; undefined index aa<br />--&gt; lets see if it is set<br /><br />so you need to use parenthesis<br />"lets see if it is set".($a['aa']??'not set')</span></code></div>
  </div>
 </div>
  <div class="note" id="121509">  <div class="votes">
    <div id="Vu121509">
    <a href="/manual/vote-note.php?id=121509&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121509">
    <a href="/manual/vote-note.php?id=121509&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121509" title="67% like this...">
    48
    </div>
  </div>
  <a href="#121509" class="name">
  <strong class="user"><em>aaronw at catalyst dot net dot nz</em></strong></a><a class="genanchor" href="#121509"> &para;</a><div class="date" title="2017-08-11 01:18"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121509">
<div class="phpcode"><code><span class="html">If you've come here looking for a full list of PHP operators, take note that the table here is *not* complete. There are some additional operators (or operator-ish punctuation tokens) that are not included here, such as "-&gt;", "::", and "...".<br /><br />For a really comprehensive list, take a look at the "List of Parser Tokens" page: <a href="http://php.net/manual/en/tokens.php" rel="nofollow" target="_blank">http://php.net/manual/en/tokens.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="109325">  <div class="votes">
    <div id="Vu109325">
    <a href="/manual/vote-note.php?id=109325&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109325">
    <a href="/manual/vote-note.php?id=109325&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109325" title="62% like this...">
    52
    </div>
  </div>
  <a href="#109325" class="name">
  <strong class="user"><em>Carsten Milkau</em></strong></a><a class="genanchor" href="#109325"> &para;</a><div class="date" title="2012-07-06 12:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109325">
<div class="phpcode"><code><span class="html">Beware the unusual order of bit-wise operators and comparison operators, this has often lead to bugs in my experience. For instance:<br /><br /><span class="default">&lt;?php </span><span class="keyword">if ( </span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">MASK  </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) </span><span class="default">do_something</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span><br />will not do what you might expect from other languages. Use<br /><br /><span class="default">&lt;?php </span><span class="keyword">if ((</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">MASK</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) </span><span class="default">do_something</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span><br />in PHP instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="126388">  <div class="votes">
    <div id="Vu126388">
    <a href="/manual/vote-note.php?id=126388&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126388">
    <a href="/manual/vote-note.php?id=126388&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126388" title="60% like this...">
    6
    </div>
  </div>
  <a href="#126388" class="name">
  <strong class="user"><em>tlili dot mokhtar at gmail dot com</em></strong></a><a class="genanchor" href="#126388"> &para;</a><div class="date" title="2021-09-04 09:58"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126388">
<div class="phpcode"><code><span class="html">An easy trick to get the result of the left shift operation (&lt;&lt;), e.g.<br /><br />15 &lt;&lt; 2 = 15 * (2*2) = 60<br /><br />15 &lt;&lt; 3 = 15 * (2*2*2) = 120<br /><br />15 &lt;&lt; 5 = 15 * (2*2*2*2*2) = 480<br /><br />and so on...<br /><br />So it's:<br /><br />(number on left) multiplied by (number on right) times 2.<br /><br />The same goes for the right shift operator (&gt;&gt;), where:<br /><br />(number on left) divided by (number on right) times 2 e.g.<br /><br />15 &gt;&gt; 2 = (15/2)/2 = 7/2 = 3 (use floor values if result is in decimals).<br /><br />35 &gt;&gt; 3 = (((35/2)/2)/2 = (17/2)/2 = 8/2 = 4</span></code></div>
  </div>
 </div>
  <div class="note" id="127888">  <div class="votes">
    <div id="Vu127888">
    <a href="/manual/vote-note.php?id=127888&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127888">
    <a href="/manual/vote-note.php?id=127888&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127888" title="59% like this...">
    5
    </div>
  </div>
  <a href="#127888" class="name">
  <strong class="user"><em>sangala at seznam dot cz</em></strong></a><a class="genanchor" href="#127888"> &para;</a><div class="date" title="2022-11-01 08:42"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127888">
<div class="phpcode"><code><span class="html">Using cast and ternary operator can be unclear,<br />(Useful to know with: declare(strict_types = 1) ). <br /><span class="default">&lt;?php<br />$num_str</span><span class="keyword">=</span><span class="string">"5"</span><span class="keyword">;<br /><br /></span><span class="default">$i1 </span><span class="keyword">= (int)  isset(</span><span class="default">$num_str</span><span class="keyword">) ? </span><span class="default">$num_str </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$i2 </span><span class="keyword">= (int) (isset(</span><span class="default">$num_str</span><span class="keyword">) ? </span><span class="default">$num_str </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$i1</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$i2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Output:<br />string(1) "5"<br />int(5)</span></code></div>
  </div>
 </div>
  <div class="note" id="121011">  <div class="votes">
    <div id="Vu121011">
    <a href="/manual/vote-note.php?id=121011&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121011">
    <a href="/manual/vote-note.php?id=121011&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121011" title="57% like this...">
    12
    </div>
  </div>
  <a href="#121011" class="name">
  <strong class="user"><em>ivan at dilber dot info</em></strong></a><a class="genanchor" href="#121011"> &para;</a><div class="date" title="2017-04-24 03:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121011">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="comment">// Another tricky thing here is using &amp;&amp; or || with ternary ?:<br /></span><span class="default">$x </span><span class="keyword">&amp;&amp; </span><span class="default">$y </span><span class="keyword">? </span><span class="default">$a </span><span class="keyword">: </span><span class="default">$b</span><span class="keyword">;  </span><span class="comment">// ($x &amp;&amp; $y) ? $a : $b;<br /><br />// while:<br /></span><span class="default">$x </span><span class="keyword">and </span><span class="default">$y </span><span class="keyword">? </span><span class="default">$a </span><span class="keyword">: </span><span class="default">$b</span><span class="keyword">;  </span><span class="comment">// $x and ($y ? $a : $b);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125846">  <div class="votes">
    <div id="Vu125846">
    <a href="/manual/vote-note.php?id=125846&amp;page=language.operators.precedence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125846">
    <a href="/manual/vote-note.php?id=125846&amp;page=language.operators.precedence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125846" title="56% like this...">
    3
    </div>
  </div>
  <a href="#125846" class="name">
  <strong class="user"><em>instatiendaweb at gmail dot com</em></strong></a><a class="genanchor" href="#125846"> &para;</a><div class="date" title="2021-02-20 09:44"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125846">
<div class="phpcode"><code><span class="html">//incorrect<br />$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2<br />//Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` <br />//correct<br />$a = (true ? 0 : true) ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2<br /><br />==&gt; correction documentation.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.precedence&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.precedence.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
