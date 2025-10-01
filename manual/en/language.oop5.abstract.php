<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Class Abstraction - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.abstract.php">
 <link rel="shorturl" href="https://www.php.net/oop5.abstract">
 <link rel="alternate" href="https://www.php.net/oop5.abstract" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.static.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.interfaces.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.abstract.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.abstract.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.abstract.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.abstract.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.abstract.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.abstract.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.abstract.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.abstract.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.abstract.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.abstract.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.abstract.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Class Abstraction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Class Abstraction - Manual" />
<meta name="twitter:description" content="Class Abstraction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Class Abstraction - Manual" />
<meta itemprop="description" content="Class Abstraction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Class Abstraction" />

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
        <a href="language.oop5.interfaces.php">
          Object Interfaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.static.php">
          &laquo; Static Keyword        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.abstract.php' selected="selected">English</option>
            <option value='de/language.oop5.abstract.php'>German</option>
            <option value='es/language.oop5.abstract.php'>Spanish</option>
            <option value='fr/language.oop5.abstract.php'>French</option>
            <option value='it/language.oop5.abstract.php'>Italian</option>
            <option value='ja/language.oop5.abstract.php'>Japanese</option>
            <option value='pt_BR/language.oop5.abstract.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.abstract.php'>Russian</option>
            <option value='tr/language.oop5.abstract.php'>Turkish</option>
            <option value='uk/language.oop5.abstract.php'>Ukrainian</option>
            <option value='zh/language.oop5.abstract.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.abstract" class="sect1">
  <h2 class="title">Class Abstraction</h2>

  <p class="para">
   PHP has abstract classes, methods, and properties.
   Classes defined as abstract cannot be instantiated, and any class that
   contains at least one abstract method or property must also be abstract.
   Methods defined as abstract simply declare the method&#039;s signature and whether it is public or protected;
   they cannot define the implementation. Properties defined as abstract
   may declare a requirement for <code class="literal">get</code> or <code class="literal">set</code>
   behavior, and may provide an implementation for one, but not both, operations.
  </p>

  <p class="para">
   When inheriting from an abstract class, all methods marked abstract in
   the parent&#039;s class declaration must be defined by the child class,
   and follow the usual
   <a href="language.oop5.inheritance.php" class="link">inheritance</a> and
   <a href="language.oop5.basic.php#language.oop.lsp" class="link">signature compatibility</a> rules.
  </p>

  <p class="simpara">
   As of PHP 8.4, an abstract class may declare an abstract property, either public or protected.
   A protected abstract property may be satisfied by a property that is readable/writeable from either
   protected or public scope.
  </p>
  <p class="simpara">
   An abstract property may be satisfied either by a standard property or by a property
   with defined <a href="language.oop5.property-hooks.php" class="link">hooks</a>, corresponding to the required operation.
  </p>

  <div class="example" id="example-317">
   <p><strong>Example #1 Abstract method example</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">abstract class </span><span style="color: #0000BB">AbstractClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Force extending class to define this method<br />    </span><span style="color: #007700">abstract protected function </span><span style="color: #0000BB">getValue</span><span style="color: #007700">();<br />    abstract protected function </span><span style="color: #0000BB">prefixValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">// Common method<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">printOut</span><span style="color: #007700">()<br />    {<br />        print </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">ConcreteClass1 </span><span style="color: #007700">extends </span><span style="color: #0000BB">AbstractClass<br /></span><span style="color: #007700">{<br />    protected function </span><span style="color: #0000BB">getValue</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #DD0000">"ConcreteClass1"</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">prefixValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">)<br />    {<br />        return </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">}</span><span style="color: #DD0000">ConcreteClass1"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">ConcreteClass2 </span><span style="color: #007700">extends </span><span style="color: #0000BB">AbstractClass<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">getValue</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #DD0000">"ConcreteClass2"</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">prefixValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">)<br />    {<br />        return </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">}</span><span style="color: #DD0000">ConcreteClass2"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$class1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">ConcreteClass1</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$class1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printOut</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$class1</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prefixValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'FOO_'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$class2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">ConcreteClass2</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$class2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printOut</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$class2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prefixValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'FOO_'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
ConcreteClass1
FOO_ConcreteClass1
ConcreteClass2
FOO_ConcreteClass2
</pre></div>
   </div>
  </div>

  <div class="example" id="example-318">
   <p><strong>Example #2 Abstract method example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">abstract class </span><span style="color: #0000BB">AbstractClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// An abstract method only needs to define the required arguments<br />    </span><span style="color: #007700">abstract protected function </span><span style="color: #0000BB">prefixName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}<br /><br />class </span><span style="color: #0000BB">ConcreteClass </span><span style="color: #007700">extends </span><span style="color: #0000BB">AbstractClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// A child class may define optional parameters which are not present in the parent's signature<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">prefixName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$separator </span><span style="color: #007700">= </span><span style="color: #DD0000">"."</span><span style="color: #007700">)<br />    {<br />        if (</span><span style="color: #0000BB">$name </span><span style="color: #007700">== </span><span style="color: #DD0000">"Pacman"</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= </span><span style="color: #DD0000">"Mr"</span><span style="color: #007700">;<br />        } elseif (</span><span style="color: #0000BB">$name </span><span style="color: #007700">== </span><span style="color: #DD0000">"Pacwoman"</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= </span><span style="color: #DD0000">"Mrs"</span><span style="color: #007700">;<br />        } else {<br />            </span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= </span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />        }<br /><br />        return </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">}{</span><span style="color: #0000BB">$separator</span><span style="color: #007700">}</span><span style="color: #DD0000"> </span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">ConcreteClass</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prefixName</span><span style="color: #007700">(</span><span style="color: #DD0000">"Pacman"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prefixName</span><span style="color: #007700">(</span><span style="color: #DD0000">"Pacwoman"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Mr. Pacman
Mrs. Pacwoman
</pre></div>
   </div>
  </div>
  <div class="example" id="example-319">
   <p><strong>Example #3 Abstract property example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">abstract class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Extending classes must have a publicly-gettable property<br />    </span><span style="color: #007700">abstract public </span><span style="color: #0000BB">string $readable </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">// Extending classes must have a protected- or public-writeable property<br />    </span><span style="color: #007700">abstract protected </span><span style="color: #0000BB">string $writeable </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">// Extending classes must have a protected or public symmetric property<br />    </span><span style="color: #007700">abstract protected </span><span style="color: #0000BB">string $both </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">set</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// This satisfies the requirement and also makes it settable, which is valid<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $readable</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// This would NOT satisfy the requirement, as it is not publicly readable<br />    </span><span style="color: #007700">protected </span><span style="color: #0000BB">string $readable</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// This satisfies the requirement exactly, so is sufficient.<br />    // It may only be written to, and only from protected scope<br />    </span><span style="color: #007700">protected </span><span style="color: #0000BB">string $writeable </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">// This expands the visibility from protected to public, which is fine<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $both</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <p class="simpara">
   An abstract property on an abstract class may provide implementations for any hook,
   but must have either <code class="literal">get</code> or <code class="literal">set</code> declared but not defined (as in the example above).
  </p>
  <div class="example" id="example-320">
   <p><strong>Example #4 Abstract property with hooks example</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">abstract class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// This provides a default (but overridable) set implementation,<br />    // and requires child classes to provide a get implementation<br />    </span><span style="color: #007700">abstract public </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get</span><span style="color: #007700">;<br /><br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">{<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/abstract.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.abstract%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.abstract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.abstract.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82111">  <div class="votes">
    <div id="Vu82111">
    <a href="/manual/vote-note.php?id=82111&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82111">
    <a href="/manual/vote-note.php?id=82111&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82111" title="84% like this...">
    756
    </div>
  </div>
  <a href="#82111" class="name">
  <strong class="user"><em>ironiridis at gmail dot com</em></strong></a><a class="genanchor" href="#82111"> &para;</a><div class="date" title="2008-03-27 01:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82111">
<div class="phpcode"><code><span class="html">Just one more time, in the simplest terms possible:<br /><br />An Interface is like a protocol. It doesn't designate the behavior of the object; it designates how your code tells that object to act. An interface would be like the English Language: defining an interface defines how your code communicates with any object implementing that interface.<br /><br />An interface is always an agreement or a promise. When a class says "I implement interface Y", it is saying "I promise to have the same public methods that any object with interface Y has".<br /><br />On the other hand, an Abstract Class is like a partially built class. It is much like a document with blanks to fill in. It might be using English, but that isn't as important as the fact that some of the document is already written.<br /><br />An abstract class is the foundation for another object. When a class says "I extend abstract class Y", it is saying "I use some methods or properties already defined in this other class named Y".<br /><br />So, consider the following PHP:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">X </span><span class="keyword">implements </span><span class="default">Y </span><span class="keyword">{ } </span><span class="comment">// this is saying that "X" agrees to speak language "Y" with your code.<br /><br /></span><span class="keyword">class </span><span class="default">X </span><span class="keyword">extends </span><span class="default">Y </span><span class="keyword">{ } </span><span class="comment">// this is saying that "X" is going to complete the partial class "Y".<br /></span><span class="default">?&gt;<br /></span><br />You would have your class implement a particular interface if you were distributing a class to be used by other people. The interface is an agreement to have a specific set of public methods for your class.<br /><br />You would have your class extend an abstract class if you (or someone else) wrote a class that already had some methods written that you want to use in your new class.<br /><br />These concepts, while easy to confuse, are specifically different and distinct. For all intents and purposes, if you're the only user of any of your classes, you don't need to implement interfaces.</span></code></div>
  </div>
 </div>
  <div class="note" id="95404">  <div class="votes">
    <div id="Vu95404">
    <a href="/manual/vote-note.php?id=95404&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95404">
    <a href="/manual/vote-note.php?id=95404&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95404" title="82% like this...">
    296
    </div>
  </div>
  <a href="#95404" class="name">
  <strong class="user"><em>mbajoras at gmail dot com</em></strong></a><a class="genanchor" href="#95404"> &para;</a><div class="date" title="2009-12-31 11:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95404">
<div class="phpcode"><code><span class="html">Here's an example that helped me with understanding abstract classes. It's just a very simple way of explaining it (in my opinion). Lets say we have the following code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Fruit </span><span class="keyword">{
<br />    private </span><span class="default">$color</span><span class="keyword">;
<br />    
<br />    public function </span><span class="default">eat</span><span class="keyword">() {
<br />        </span><span class="comment">//chew
<br />    </span><span class="keyword">}
<br />    
<br />    public function </span><span class="default">setColor</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">color </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />class </span><span class="default">Apple </span><span class="keyword">extends </span><span class="default">Fruit </span><span class="keyword">{
<br />    public function </span><span class="default">eat</span><span class="keyword">() {
<br />        </span><span class="comment">//chew until core
<br />    </span><span class="keyword">}
<br />}
<br />
<br />class </span><span class="default">Orange </span><span class="keyword">extends </span><span class="default">Fruit </span><span class="keyword">{
<br />    public function </span><span class="default">eat</span><span class="keyword">() {
<br />        </span><span class="comment">//peel
<br />        //chew
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now I give you an apple and you eat it.
<br />
<br /><span class="default">&lt;?php
<br />$apple </span><span class="keyword">= new </span><span class="default">Apple</span><span class="keyword">();
<br /></span><span class="default">$apple</span><span class="keyword">-&gt;</span><span class="default">eat</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />What does it taste like? It tastes like an apple. Now I give you a fruit.
<br />
<br /><span class="default">&lt;?php
<br />$fruit </span><span class="keyword">= new </span><span class="default">Fruit</span><span class="keyword">();
<br /></span><span class="default">$fruit</span><span class="keyword">-&gt;</span><span class="default">eat</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />What does that taste like??? Well, it doesn't make much sense, so you shouldn't be able to do that. This is accomplished by making the Fruit class abstract as well as the eat method inside of it.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">abstract class </span><span class="default">Fruit </span><span class="keyword">{
<br />    private </span><span class="default">$color</span><span class="keyword">;
<br />    
<br />    abstract public function </span><span class="default">eat</span><span class="keyword">();
<br />    
<br />    public function </span><span class="default">setColor</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">color </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now just think about a Database class where MySQL and PostgreSQL extend it. Also, a note. An abstract class is just like an interface, but you can define methods in an abstract class whereas in an interface they are all abstract.</span></code></div>
  </div>
 </div>
  <div class="note" id="126083">  <div class="votes">
    <div id="Vu126083">
    <a href="/manual/vote-note.php?id=126083&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126083">
    <a href="/manual/vote-note.php?id=126083&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126083" title="75% like this...">
    6
    </div>
  </div>
  <a href="#126083" class="name">
  <strong class="user"><em>shewa12kpi at gmail dot com</em></strong></a><a class="genanchor" href="#126083"> &para;</a><div class="date" title="2021-05-18 11:37"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126083">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Here is a good example of abstract class. Here BaseEmployee is not actual employee its just asbtract class that reduce our code and enforce child class to implement abstract method<br /><br /></span><span class="keyword">abstract class </span><span class="default">BaseEmployee </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * employee common attributes could in asbtract class<br />    */<br />    </span><span class="keyword">public     </span><span class="default">$firstname</span><span class="keyword">,<br />            </span><span class="default">$lastname</span><span class="keyword">;<br /><br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">, </span><span class="default">$ln</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">firstname </span><span class="keyword">= </span><span class="default">$fn</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">lastname </span><span class="keyword">= </span><span class="default">$ln</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getFullName</span><span class="keyword">() {<br /><br />        return </span><span class="string">"</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">firstname</span><span class="string"> </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">lastname</span><span class="string">"</span><span class="keyword">;<br />    } <br /><br />    </span><span class="comment">/**<br />    * asbtract method that a child class must have to define<br />    */<br />    </span><span class="keyword">abstract protected static function </span><span class="default">task</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">WebDeveloper </span><span class="keyword">extends </span><span class="default">BaseEmployee </span><span class="keyword">{<br /><br />    static function </span><span class="default">task</span><span class="keyword">()<br />    {<br />        return </span><span class="string">' Develop web application'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">HR </span><span class="keyword">extends </span><span class="default">BaseEmployee </span><span class="keyword">{<br /><br />    static function </span><span class="default">task</span><span class="keyword">()<br />    {<br />        return </span><span class="string">' Manage human resources'</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="comment">/**<br /> * now instantiate and get data<br />*/<br /></span><span class="default">$webDeveloper </span><span class="keyword">= new </span><span class="default">WebDeveloper</span><span class="keyword">(</span><span class="string">'shaikh'</span><span class="keyword">,</span><span class="string">'ahmed'</span><span class="keyword">);<br />echo </span><span class="default">$webDeveloper</span><span class="keyword">-&gt;</span><span class="default">getFullName</span><span class="keyword">();<br />echo </span><span class="default">$webDeveloper</span><span class="keyword">-&gt;</span><span class="default">task</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120721">  <div class="votes">
    <div id="Vu120721">
    <a href="/manual/vote-note.php?id=120721&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120721">
    <a href="/manual/vote-note.php?id=120721&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120721" title="70% like this...">
    30
    </div>
  </div>
  <a href="#120721" class="name">
  <strong class="user"><em>jai at shaped dot ca</em></strong></a><a class="genanchor" href="#120721"> &para;</a><div class="date" title="2017-03-02 05:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120721">
<div class="phpcode"><code><span class="html">This example will hopefully help you see how abstract works, how interfaces work, and how they can work together. This example will also work/compile on PHP7, the others were typed live in the form and may work but the last one was made/tested for real:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">const </span><span class="default">¶ </span><span class="keyword">= </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// Define things a product *has* to be able to do (has to implement)<br /></span><span class="keyword">interface </span><span class="default">productInterface </span><span class="keyword">{<br />    public function </span><span class="default">doSell</span><span class="keyword">();<br />    public function </span><span class="default">doBuy</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// Define our default abstraction<br /></span><span class="keyword">abstract class </span><span class="default">defaultProductAbstraction </span><span class="keyword">implements </span><span class="default">productInterface </span><span class="keyword">{<br />    private </span><span class="default">$_bought </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    private </span><span class="default">$_sold </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    abstract public function </span><span class="default">doMore</span><span class="keyword">();<br />    public function </span><span class="default">doSell</span><span class="keyword">() {<br />        </span><span class="comment">/* the default implementation */<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_sold </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        echo </span><span class="string">"defaultProductAbstraction doSell: </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_sold</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">doBuy</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bought </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        echo </span><span class="string">"defaultProductAbstraction doBuy: </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bought</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">defaultProductImplementation </span><span class="keyword">extends </span><span class="default">defaultProductAbstraction </span><span class="keyword">{<br />    public function </span><span class="default">doMore</span><span class="keyword">() {<br />        echo </span><span class="string">"defaultProductImplementation doMore()"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">myProductImplementation </span><span class="keyword">extends </span><span class="default">defaultProductAbstraction </span><span class="keyword">{<br />    public function </span><span class="default">doMore</span><span class="keyword">() {<br />        echo </span><span class="string">"myProductImplementation doMore() does more!"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">doBuy</span><span class="keyword">() {<br />        echo </span><span class="string">"myProductImplementation's doBuy() and also my parent's dubai()"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">doBuy</span><span class="keyword">();<br />    }<br />}<br /><br />class </span><span class="default">myProduct </span><span class="keyword">extends </span><span class="default">defaultProductImplementation </span><span class="keyword">{<br />    private </span><span class="default">$_bought</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bought</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">doBuy </span><span class="keyword">() {<br />        </span><span class="comment">/* non-default doBuy implementation */<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bought </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        echo </span><span class="string">"myProduct overrides the defaultProductImplementation's doBuy() here </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bought</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">myOtherProduct </span><span class="keyword">extends </span><span class="default">myProductImplementation </span><span class="keyword">{<br />    public function </span><span class="default">doBuy</span><span class="keyword">() {<br />        echo </span><span class="string">"myOtherProduct overrides myProductImplementations doBuy() here but still calls parent too"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">doBuy</span><span class="keyword">();<br />    }<br />}<br /><br />echo </span><span class="string">"new myProduct()"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br /></span><span class="default">$product </span><span class="keyword">= new </span><span class="default">myProduct</span><span class="keyword">();<br /><br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">doBuy</span><span class="keyword">();<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">doSell</span><span class="keyword">();<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">doMore</span><span class="keyword">();<br /><br />echo </span><span class="default">¶</span><span class="keyword">.</span><span class="string">"new defaultProductImplementation()"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br /><br /></span><span class="default">$newProduct </span><span class="keyword">= new </span><span class="default">defaultProductImplementation</span><span class="keyword">();<br /></span><span class="default">$newProduct</span><span class="keyword">-&gt;</span><span class="default">doBuy</span><span class="keyword">();<br /></span><span class="default">$newProduct</span><span class="keyword">-&gt;</span><span class="default">doSell</span><span class="keyword">();<br /></span><span class="default">$newProduct</span><span class="keyword">-&gt;</span><span class="default">doMore</span><span class="keyword">();<br /><br />echo </span><span class="default">¶</span><span class="keyword">.</span><span class="string">"new myProductImplementation"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br /></span><span class="default">$lastProduct </span><span class="keyword">= new </span><span class="default">myProductImplementation</span><span class="keyword">();<br /></span><span class="default">$lastProduct</span><span class="keyword">-&gt;</span><span class="default">doBuy</span><span class="keyword">();<br /></span><span class="default">$lastProduct</span><span class="keyword">-&gt;</span><span class="default">doSell</span><span class="keyword">();<br /></span><span class="default">$lastProduct</span><span class="keyword">-&gt;</span><span class="default">doMore</span><span class="keyword">();<br /><br />echo </span><span class="default">¶</span><span class="keyword">.</span><span class="string">"new myOtherProduct"</span><span class="keyword">.</span><span class="default">¶</span><span class="keyword">;<br /></span><span class="default">$anotherNewProduct </span><span class="keyword">= new </span><span class="default">myOtherProduct</span><span class="keyword">();<br /></span><span class="default">$anotherNewProduct</span><span class="keyword">-&gt;</span><span class="default">doBuy</span><span class="keyword">();<br /></span><span class="default">$anotherNewProduct</span><span class="keyword">-&gt;</span><span class="default">doSell</span><span class="keyword">();<br /></span><span class="default">$anotherNewProduct</span><span class="keyword">-&gt;</span><span class="default">doMore</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Will result in:<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />new myProduct()<br />bool(true)<br />myProduct overrides the defaultProductImplementation's doBuy() here 1<br />defaultProductAbstraction doSell: 1<br />defaultProductImplementation doMore()<br /><br />new defaultProductImplementation()<br />defaultProductAbstraction doBuy: 1<br />defaultProductAbstraction doSell: 1<br />defaultProductImplementation doMore()<br /><br />new myProductImplementation<br />myProductImplementation's doBuy() and also my parent's dubai()<br />defaultProductAbstraction doBuy: 1<br />defaultProductAbstraction doSell: 1<br />myProductImplementation doMore() does more!<br /><br />new myOtherProduct<br />myOtherProduct overrides myProductImplementations doBuy() here but still calls parent too<br />myProductImplementation's doBuy() and also my parent's dubai()<br />defaultProductAbstraction doBuy: 1<br />defaultProductAbstraction doSell: 1<br />myProductImplementation doMore() does more!<br /><br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122631">  <div class="votes">
    <div id="Vu122631">
    <a href="/manual/vote-note.php?id=122631&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122631">
    <a href="/manual/vote-note.php?id=122631&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122631" title="70% like this...">
    13
    </div>
  </div>
  <a href="#122631" class="name">
  <strong class="user"><em>swashata4u at gmail dot com</em></strong></a><a class="genanchor" href="#122631"> &para;</a><div class="date" title="2018-04-18 09:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122631">
<div class="phpcode"><code><span class="html">Here is another thing about abstract class and interface.<br /><br />Sometimes, we define an interface for a `Factory` and ease out some common methods of the `Factory` through an `abstract` class.<br /><br />In this case, the abstract class implements the interface, but does not need to implement all methods of the interface.<br /><br />The simple reason is, any class implementing an interface, needs to either implement all methods, or declare itself abstract.<br /><br />Because of this, the following code is perfectly ok.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Element </span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Constructor function. Must pass existing config, or leave as<br />     * is for new element, where the default will be used instead.<br />     *<br />     * @param array $config Element configuration.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">= [] );<br /><br />    </span><span class="comment">/**<br />     * Get the definition of the Element.<br />     *<br />     * @return array An array with 'title', 'description' and 'type'<br />     */<br />    </span><span class="keyword">public static function </span><span class="default">get_definition</span><span class="keyword">();<br /><br />    </span><span class="comment">/**<br />     * Get Element config variable.<br />     *<br />     * @return array Associative array of Element Config.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">get_config</span><span class="keyword">();<br /><br />    </span><span class="comment">/**<br />     * Set Element config variable.<br />     *<br />     * @param array $config New configuration variable.<br />     *<br />     * @return void<br />     */<br />    </span><span class="keyword">public function </span><span class="default">set_config</span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">);<br />}<br /><br />abstract class </span><span class="default">Base </span><span class="keyword">implements </span><span class="default">Element </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * Element configuration variable<br />     *<br />     * @var array<br />     */<br />    </span><span class="keyword">protected </span><span class="default">$config </span><span class="keyword">= [];<br /><br />    </span><span class="comment">/**<br />     * Get Element config variable.<br />     *<br />     * @return array Associative array of Element Config.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">get_config</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">config</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Create an eForm Element instance<br />     *<br />     * @param array $config Element config.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">= [] ) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_config</span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">MyElement </span><span class="keyword">extends </span><span class="default">Base </span><span class="keyword">{<br /><br />    public static function </span><span class="default">get_definition</span><span class="keyword">() {<br />        return [<br />            </span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="string">'MyElement'</span><span class="keyword">,<br />        ];<br />    }<br /><br />    public function </span><span class="default">set_config</span><span class="keyword">( </span><span class="default">$config </span><span class="keyword">) {<br />        </span><span class="comment">// Do something here<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">config </span><span class="keyword">= </span><span class="default">$config</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$element </span><span class="keyword">= new </span><span class="default">MyElement</span><span class="keyword">( [<br />    </span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">,<br />] );<br /><br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">get_config</span><span class="keyword">() );<br /></span><span class="default">?&gt;<br /></span><br />You can see the tests being executed here and PHP 5.4 upward, the output is consistent. <a href="https://3v4l.org/8NqqW" rel="nofollow" target="_blank">https://3v4l.org/8NqqW</a></span></code></div>
  </div>
 </div>
  <div class="note" id="103118">  <div class="votes">
    <div id="Vu103118">
    <a href="/manual/vote-note.php?id=103118&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103118">
    <a href="/manual/vote-note.php?id=103118&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103118" title="68% like this...">
    66
    </div>
  </div>
  <a href="#103118" class="name">
  <strong class="user"><em>a dot tsiaparas at watergate dot gr</em></strong></a><a class="genanchor" href="#103118"> &para;</a><div class="date" title="2011-03-26 03:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103118">
<div class="phpcode"><code><span class="html">Abstraction and interfaces are two very different tools. The are as close as hammers and drills. Abstract classes may have implemented methods, whereas interfaces have no implementation in themselves.<br /><br />Abstract classes that declare all their methods as abstract are not interfaces with different names. One can implement multiple interfaces, but not extend multiple classes (or abstract classes).<br /><br />The use of abstraction vs interfaces is problem specific and the choice is made during the design of software, not its implementation. In the same project you may as well offer an interface and a base (probably abstract) class as a reference that implements the interface. Why would you do that?<br /><br />Let us assume that we want to build a system that calls different services, which in turn have actions. Normally, we could offer a method called execute that accepts the name of the action as a parameter and executes the action.<br /><br />We want to make sure that classes can actually define their own ways of executing actions. So we create an interface IService that has the execute method. Well, in most of your cases, you will be copying and pasting the exact same code for execute.<br /><br />We can create a reference implemention for a class named Service and implement the execute method. So, no more copying and pasting for your other classes! But what if you want to extend MySLLi?? You can implement the interface (copy-paste probably), and there you are, again with a service. Abstraction can be included in the class for initialisation code, which cannot be predefined for every class that you will write.<br /><br />Hope this is not too mind-boggling and helps someone. Cheers,<br />Alexios Tsiaparas</span></code></div>
  </div>
 </div>
  <div class="note" id="123193">  <div class="votes">
    <div id="Vu123193">
    <a href="/manual/vote-note.php?id=123193&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123193">
    <a href="/manual/vote-note.php?id=123193&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123193" title="69% like this...">
    19
    </div>
  </div>
  <a href="#123193" class="name">
  <strong class="user"><em>shaman_master at list dot ru</em></strong></a><a class="genanchor" href="#123193"> &para;</a><div class="date" title="2018-10-03 11:52"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123193">
<div class="phpcode"><code><span class="html">Also you may set return/arguments type declaring for abstract methods (PHP&gt;=7.0)<br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />abstract class </span><span class="default">Adapter<br /></span><span class="keyword">{<br />    protected </span><span class="default">$name</span><span class="keyword">;<br />    abstract public function </span><span class="default">getName</span><span class="keyword">(): </span><span class="default">string</span><span class="keyword">;<br />    abstract public function </span><span class="default">setName</span><span class="keyword">(</span><span class="default">string $value</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">AdapterFoo </span><span class="keyword">extends </span><span class="default">Adapter<br /></span><span class="keyword">{<br />    public function </span><span class="default">getName</span><span class="keyword">(): </span><span class="default">string<br />    </span><span class="keyword">{<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// return type declaring not defined in abstract class, set here<br />    </span><span class="keyword">public function </span><span class="default">setName</span><span class="keyword">(</span><span class="default">string $value</span><span class="keyword">): </span><span class="default">self<br />    </span><span class="keyword">{<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120028">  <div class="votes">
    <div id="Vu120028">
    <a href="/manual/vote-note.php?id=120028&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120028">
    <a href="/manual/vote-note.php?id=120028&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120028" title="68% like this...">
    8
    </div>
  </div>
  <a href="#120028" class="name">
  <strong class="user"><em>Eugeny at Kostanay dot KZ</em></strong></a><a class="genanchor" href="#120028"> &para;</a><div class="date" title="2016-10-12 01:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120028">
<div class="phpcode"><code><span class="html">A snippet of code to help you understand a bit more about properties inside abstract classes:<br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">anotherAbsClass<br /></span><span class="keyword">{<br />    </span><span class="comment">// Define and set a static property<br />    </span><span class="keyword">static </span><span class="default">$stProp </span><span class="keyword">= </span><span class="string">'qwerty'</span><span class="keyword">;        </span><span class="comment">// We can still use it directly by the static way<br />    // Define and set a protected property<br />    </span><span class="keyword">protected </span><span class="default">$prProp </span><span class="keyword">= </span><span class="string">'walrus'</span><span class="keyword">;<br />    </span><span class="comment">// It is useless to set any other level of visibility for non-static variables of an abstract class.<br />    // We cannot access to a private property even inside a declared method of an abstract class because we cannot call that method in the object context.<br />    // Implementation of a common method<br />    </span><span class="keyword">protected function </span><span class="default">callMe</span><span class="keyword">() {<br />        echo </span><span class="string">'On call: ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prProp </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Declaration of some abstract methods<br />    </span><span class="keyword">abstract protected function </span><span class="default">abc</span><span class="keyword">(</span><span class="default">$arg1</span><span class="keyword">, </span><span class="default">$arg2</span><span class="keyword">);<br />    abstract public function </span><span class="default">getJunk</span><span class="keyword">(</span><span class="default">$arg1</span><span class="keyword">, </span><span class="default">$arg2</span><span class="keyword">, </span><span class="default">$arg3</span><span class="keyword">, </span><span class="default">$junkCollector </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">);    <br />    </span><span class="comment">// Note: we cannot omit an optional value without getting error if it has already been declared by an abstract class<br /></span><span class="keyword">}<br /><br />class </span><span class="default">someChildClass </span><span class="keyword">extends </span><span class="default">anotherAbsClass<br /></span><span class="keyword">{    <br />    function </span><span class="default">__construct</span><span class="keyword">() {<br />        echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callMe</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;    </span><span class="comment">// now we get the protected property $prProp inhereted from within the abstract class<br />    </span><span class="keyword">}<br />    </span><span class="comment">// There must be implementation of the declared functions abc and getJunk below<br />    </span><span class="keyword">protected function </span><span class="default">abc</span><span class="keyword">(</span><span class="default">$val1</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="comment">// do something<br />    </span><span class="keyword">}<br />    function </span><span class="default">getJunk</span><span class="keyword">(</span><span class="default">$val1</span><span class="keyword">, </span><span class="default">$val2</span><span class="keyword">, </span><span class="default">$val3</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {    </span><span class="comment">// optional value is neccessary, because it has been declared above<br />        // do something<br />    </span><span class="keyword">}<br />}<br /><br />echo </span><span class="default">anotherAbsClass</span><span class="keyword">::</span><span class="default">$stProp</span><span class="keyword">;    </span><span class="comment">// qwerty<br /></span><span class="default">$objTest </span><span class="keyword">= new </span><span class="default">someChildClass</span><span class="keyword">;   </span><span class="comment">// On call: walrus <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104210">  <div class="votes">
    <div id="Vu104210">
    <a href="/manual/vote-note.php?id=104210&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104210">
    <a href="/manual/vote-note.php?id=104210&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104210" title="65% like this...">
    69
    </div>
  </div>
  <a href="#104210" class="name">
  <strong class="user"><em>joelhy</em></strong></a><a class="genanchor" href="#104210"> &para;</a><div class="date" title="2011-05-31 07:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104210">
<div class="phpcode"><code><span class="html">The documentation says: "It is not allowed to create an instance of a class that has been defined as abstract.". It only means you cannot initialize an object from an abstract class. Invoking static method of abstract class is still feasible. For example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    static function </span><span class="default">bar</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"test\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">bar</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78388">  <div class="votes">
    <div id="Vu78388">
    <a href="/manual/vote-note.php?id=78388&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78388">
    <a href="/manual/vote-note.php?id=78388&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78388" title="66% like this...">
    20
    </div>
  </div>
  <a href="#78388" class="name">
  <strong class="user"><em>sneakyimp at hotmail dot com</em></strong></a><a class="genanchor" href="#78388"> &para;</a><div class="date" title="2007-10-09 05:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78388">
<div class="phpcode"><code><span class="html">Ok...the docs are a bit vague when it comes to an abstract class extending another abstract class.  An abstract class that extends another abstract class doesn't need to define the abstract methods from the parent class.  In other words, this causes an error:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">abstract class </span><span class="default">class1 </span><span class="keyword">{
<br />  abstract public function </span><span class="default">someFunc</span><span class="keyword">();
<br />}
<br />abstract class </span><span class="default">class2 </span><span class="keyword">extends </span><span class="default">class1 </span><span class="keyword">{
<br />  abstract public function </span><span class="default">someFunc</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Error: Fatal error: Can't inherit abstract function class1::someFunc() (previously declared abstract in class2) in /home/sneakyimp/public/chump.php on line 7
<br />
<br />However this does not:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">abstract class </span><span class="default">class1 </span><span class="keyword">{
<br />  abstract public function </span><span class="default">someFunc</span><span class="keyword">();
<br />}
<br />abstract class </span><span class="default">class2 </span><span class="keyword">extends </span><span class="default">class1 </span><span class="keyword">{
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />An abstract class that extends an abstract class can pass the buck to its child classes when it comes to implementing the abstract methods of its parent abstract class.</span></code></div>
  </div>
 </div>
  <div class="note" id="99117">  <div class="votes">
    <div id="Vu99117">
    <a href="/manual/vote-note.php?id=99117&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99117">
    <a href="/manual/vote-note.php?id=99117&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99117" title="63% like this...">
    19
    </div>
  </div>
  <a href="#99117" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#99117"> &para;</a><div class="date" title="2010-07-28 10:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99117">
<div class="phpcode"><code><span class="html">Incidentally, abstract classes do not need to be base classes:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public function </span><span class="default">sneeze</span><span class="keyword">() { echo </span><span class="string">'achoooo'</span><span class="keyword">; }<br />}<br /><br />abstract class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Foo </span><span class="keyword">{<br />    public abstract function </span><span class="default">hiccup</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">Baz </span><span class="keyword">extends </span><span class="default">Bar </span><span class="keyword">{<br />    public function </span><span class="default">hiccup</span><span class="keyword">() { echo </span><span class="string">'hiccup!'</span><span class="keyword">; }<br />}<br /><br /></span><span class="default">$baz </span><span class="keyword">= new </span><span class="default">Baz</span><span class="keyword">();<br /></span><span class="default">$baz</span><span class="keyword">-&gt;</span><span class="default">sneeze</span><span class="keyword">();<br /></span><span class="default">$baz</span><span class="keyword">-&gt;</span><span class="default">hiccup</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120720">  <div class="votes">
    <div id="Vu120720">
    <a href="/manual/vote-note.php?id=120720&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120720">
    <a href="/manual/vote-note.php?id=120720&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120720" title="61% like this...">
    8
    </div>
  </div>
  <a href="#120720" class="name">
  <strong class="user"><em>jai at shaped dot ca</em></strong></a><a class="genanchor" href="#120720"> &para;</a><div class="date" title="2017-03-02 05:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120720">
<div class="phpcode"><code><span class="html">An interface specifies what methods a class must implement, so that anything using that class that expects it to adhere to that interface will work.<br /><br />eg: I expect any $database to have -&gt;doQuery(), so any class I assign to the database interface should implement the databaseInterface interface which forces implementation of a doQuery method.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">dbInterface </span><span class="keyword">{<br />    public function </span><span class="default">doQuery</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">myDB </span><span class="keyword">implements </span><span class="default">dbInterface </span><span class="keyword">{<br />    public function </span><span class="default">doQuery</span><span class="keyword">() {<br />      </span><span class="comment">/* implementation details here */<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$myDBObj </span><span class="keyword">= new </span><span class="default">myDB</span><span class="keyword">()-&gt;</span><span class="default">doQuery</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />An abstract class is similar except that some methods can be predefined. Ones listed as abstract will have to be defined as if the abstract class were an interface.<br /><br />eg. I expect my $person to be able to -&gt;doWalk(), most people walk fine with two feet, but some people have to hop along :(<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">PersonInterface</span><span class="keyword">() {<br />    </span><span class="comment">/* every person should walk, or attempt to */<br />    </span><span class="keyword">public function </span><span class="default">doWalk</span><span class="keyword">(</span><span class="default">$place</span><span class="keyword">);<br />    </span><span class="comment">/* every person should be able to age */<br />    </span><span class="keyword">public function </span><span class="default">doAge</span><span class="keyword">();<br />}<br /><br />abstract class </span><span class="default">AveragePerson </span><span class="keyword">implements </span><span class="default">PersonInterface</span><span class="keyword">() {<br />    private </span><span class="default">$_age </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public function </span><span class="default">doAge</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_age </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_age</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">doWalk</span><span class="keyword">(</span><span class="default">$place</span><span class="keyword">) {<br />        echo </span><span class="string">"I am going to walk to </span><span class="default">$place</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    </span><span class="comment">/* every person talks differently! */<br />    </span><span class="keyword">abstract function </span><span class="default">talk</span><span class="keyword">(</span><span class="default">$say</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">Joe </span><span class="keyword">extends </span><span class="default">AveragePerson </span><span class="keyword">{<br />    public function </span><span class="default">talk</span><span class="keyword">(</span><span class="default">$say</span><span class="keyword">) {<br />       echo </span><span class="string">"In an Austrailian accent, Joe says: </span><span class="default">$say</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Bob </span><span class="keyword">extends </span><span class="default">AveragePerson </span><span class="keyword">{<br />    public function </span><span class="default">talk</span><span class="keyword">(</span><span class="default">$say</span><span class="keyword">) {<br />        echo </span><span class="string">"In a Canadian accent, Bob says: </span><span class="default">$say</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">doWalk</span><span class="keyword">(</span><span class="default">$place</span><span class="keyword">) {<br />        echo </span><span class="string">"Bob only has one leg and has to hop to </span><span class="default">$place</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$people</span><span class="keyword">[] = new </span><span class="default">Bob</span><span class="keyword">();<br /></span><span class="default">$people</span><span class="keyword">[] = new </span><span class="default">Joe</span><span class="keyword">();<br /><br />foreach (</span><span class="default">$people </span><span class="keyword">as </span><span class="default">$person</span><span class="keyword">) {<br />    </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">doWalk</span><span class="keyword">(</span><span class="string">'over there'</span><span class="keyword">);<br />    </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">talk</span><span class="keyword">(</span><span class="string">'PHP rules'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75961">  <div class="votes">
    <div id="Vu75961">
    <a href="/manual/vote-note.php?id=75961&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75961">
    <a href="/manual/vote-note.php?id=75961&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75961" title="61% like this...">
    8
    </div>
  </div>
  <a href="#75961" class="name">
  <strong class="user"><em>joebert</em></strong></a><a class="genanchor" href="#75961"> &para;</a><div class="date" title="2007-06-24 04:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75961">
<div class="phpcode"><code><span class="html">I don't agree with jfkallens' last comparison between Abstract Classes &amp; Object Interfaces completely.<br /><br />In an Abstract Class, you can define how some methods work, where as in an Object Interface you can not.<br /><br />An Object Interface is essentually nothing but a list of function names that a class must define if the class implements that interface.<br /><br />An Abstract Class is essentually a prototype which hints towards what extending classes should be doing.<br />An Abstract Class can also be thought of as a Base Class that provides some basic functionality, &amp; also defines a built-in Object Interface that all extending classes will implement.<br /><br />So, an Object Interface is really a built-in part of an Abstract Class.</span></code></div>
  </div>
 </div>
  <div class="note" id="119406">  <div class="votes">
    <div id="Vu119406">
    <a href="/manual/vote-note.php?id=119406&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119406">
    <a href="/manual/vote-note.php?id=119406&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119406" title="56% like this...">
    3
    </div>
  </div>
  <a href="#119406" class="name">
  <strong class="user"><em>Malcolm</em></strong></a><a class="genanchor" href="#119406"> &para;</a><div class="date" title="2016-05-29 01:26"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119406">
<div class="phpcode"><code><span class="html">I've found an inconsistency with: Example #2 Abstract class example<br /><br />If you remove the default value of $separator<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public function </span><span class="default">prefixName</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$separator</span><span class="keyword">) {<br />        </span><span class="comment">// ...<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Then php will show this fatal message: <br />Fatal error: Declaration of ConcreteClass::prefixName() must be compatible with AbstractClass::prefixName($name) in /index.php on line 23<br /><br />Stange enough it gives an incorrect declaration of "ConcreteClass::prefixName()"... It is missing both arguments. Because of that I'm assuming that this is just a bug that maybe already has been taking care of in newer versions. (Or is just specific to my version) I'm mainly noting this because it was driving me absolutely insane in some test code that I was writing derived from Example #2 (without a default value for an extra argument). Perhaps this saves some frustrations to other people.<br /><br />--<br />Please note that i'm running this on php5.5. <br />OS: ubuntu-16.04-server-amd64.iso<br />Repo: ppa:ondrej/php<br /><br /># php5.5 --version<br />PHP 5.5.36-2+donate.sury.org~xenial+1 (cli)<br />Copyright (c) 1997-2015 The PHP Group<br />Zend Engine v2.5.0, Copyright (c) 1998-2015 Zend Technologies with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2015, by Zend Technologies</span></code></div>
  </div>
 </div>
  <div class="note" id="117055">  <div class="votes">
    <div id="Vu117055">
    <a href="/manual/vote-note.php?id=117055&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117055">
    <a href="/manual/vote-note.php?id=117055&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117055" title="54% like this...">
    2
    </div>
  </div>
  <a href="#117055" class="name">
  <strong class="user"><em>arma99eDAN at yahoo dot com</em></strong></a><a class="genanchor" href="#117055"> &para;</a><div class="date" title="2015-04-08 08:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117055">
<div class="phpcode"><code><span class="html">You can use an abstract class like this too:<br /><br />abstract class A{<br />    public function show(){<br />        echo 'A';<br />    }<br />}<br />class B extends A{<br />    public function hello(){<br />        echo 'B';<br />        parent::show();<br />    }<br />}<br /><br />$obj = new B;<br />$obj-&gt;hello(); // BA<br /># See that the abstract class does not have at least one abstract method<br /># Even in this case, I'm still able to extend it, or call its non-abstract member</span></code></div>
  </div>
 </div>
  <div class="note" id="101572">  <div class="votes">
    <div id="Vu101572">
    <a href="/manual/vote-note.php?id=101572&amp;page=language.oop5.abstract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101572">
    <a href="/manual/vote-note.php?id=101572&amp;page=language.oop5.abstract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101572" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101572" class="name">
  <strong class="user"><em>designbyjeeba at gmail dot com</em></strong></a><a class="genanchor" href="#101572"> &para;</a><div class="date" title="2010-12-26 06:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101572">
<div class="phpcode"><code><span class="html">Please be aware of the visibility of the parent fields. If the fields are private, then you are not going to see those fields in their childrens. Its basic OOP, but can be problematic sometimes.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.abstract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.abstract.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
