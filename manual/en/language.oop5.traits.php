<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Traits - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.traits.php">
 <link rel="shorturl" href="https://www.php.net/oop5.traits">
 <link rel="alternate" href="https://www.php.net/oop5.traits" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.interfaces.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.anonymous.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.traits.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.traits.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.traits.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.traits.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.traits.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.traits.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.traits.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.traits.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.traits.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.traits.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.traits.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Traits" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Traits - Manual" />
<meta name="twitter:description" content="Traits" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Traits - Manual" />
<meta itemprop="description" content="Traits" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Traits" />

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
        <a href="language.oop5.anonymous.php">
          Anonymous classes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.interfaces.php">
          &laquo; Object Interfaces        </a>
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
            <option value='en/language.oop5.traits.php' selected="selected">English</option>
            <option value='de/language.oop5.traits.php'>German</option>
            <option value='es/language.oop5.traits.php'>Spanish</option>
            <option value='fr/language.oop5.traits.php'>French</option>
            <option value='it/language.oop5.traits.php'>Italian</option>
            <option value='ja/language.oop5.traits.php'>Japanese</option>
            <option value='pt_BR/language.oop5.traits.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.traits.php'>Russian</option>
            <option value='tr/language.oop5.traits.php'>Turkish</option>
            <option value='uk/language.oop5.traits.php'>Ukrainian</option>
            <option value='zh/language.oop5.traits.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.traits" class="sect1">
  <h2 class="title">Traits</h2>
  <p class="para">
   PHP implements a way to reuse code called Traits.
  </p>
  <p class="para">
   Traits are a mechanism for code reuse in single inheritance languages such as
   PHP. A Trait is intended to reduce some limitations of single inheritance by
   enabling a developer to reuse sets of methods freely in several independent
   classes living in different class hierarchies. The semantics of the combination
   of Traits and classes is defined in a way which reduces complexity, and avoids
   the typical problems associated with multiple inheritance and Mixins.
  </p>
  <p class="para">
   A Trait is similar to a class, but only intended to group functionality in a
   fine-grained and consistent way. It is not possible to instantiate a Trait on
   its own. It is an addition to traditional inheritance and enables horizontal
   composition of behavior; that is, the application of class members without
   requiring inheritance.
  </p>
  <div class="example" id="language.oop5.traits.basicexample">
    <p><strong>Example #1 Trait example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">TraitA </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello'</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">TraitB </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'World'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">MyHelloWorld<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">TraitA</span><span style="color: #007700">, </span><span style="color: #0000BB">TraitB</span><span style="color: #007700">; </span><span style="color: #FF8000">// A class can use multiple traits<br /><br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">sayHelloWorld</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br />        echo </span><span style="color: #DD0000">' '</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">();<br />        echo </span><span style="color: #DD0000">"!\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$myHelloWorld </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyHelloWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$myHelloWorld</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHelloWorld</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello World!
</pre></div>
    </div>
   </div>

  <div class="sect2" id="language.oop5.traits.precedence">
   <h3 class="title">Precedence</h3>
   <p class="para">
    An inherited member from a base class is overridden by a member inserted
    by a Trait. The precedence order is that members from the current class
    override Trait methods, which in turn override inherited methods.
   </p>
   <div class="example" id="language.oop5.traits.precedence.examples.ex1">
    <p><strong>Example #2 Precedence Order Example</strong></p>
    <div class="example-contents"><p>
     An inherited method from a base class is overridden by the
     method inserted into MyHelloWorld from the SayWorld Trait. The behavior is
     the same for methods defined in the MyHelloWorld class. The precedence order
     is that methods from the current class override Trait methods, which in
     turn override methods from the base class.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Base </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello '</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">SayWorld </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br />        echo </span><span style="color: #DD0000">'World!'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">MyHelloWorld </span><span style="color: #007700">extends </span><span style="color: #0000BB">Base </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">SayWorld</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyHelloWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello World!
</pre></div>
    </div>
   </div>
   <div class="example" id="language.oop5.traits.precedence.examples.ex2">
    <p><strong>Example #3 Alternate Precedence Order Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">HelloWorld </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello World!'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">TheWorldIsNotEnough </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">HelloWorld</span><span style="color: #007700">;<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello Universe!'</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">TheWorldIsNotEnough</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello Universe!
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.multiple">
   <h3 class="title">Multiple Traits</h3>
   <p class="para">
    Multiple Traits can be inserted into a class by listing them in the <code class="literal">use</code>
    statement, separated by commas.
   </p>
   <div class="example" id="language.oop5.traits.multiple.ex1">
    <p><strong>Example #4 Multiple Traits Usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">Hello </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello '</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">World </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'World'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">MyHelloWorld </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">Hello</span><span style="color: #007700">, </span><span style="color: #0000BB">World</span><span style="color: #007700">;<br />    public function </span><span style="color: #0000BB">sayExclamationMark</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'!'</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyHelloWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayExclamationMark</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello World!
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.conflict">
   <h3 class="title">Conflict Resolution</h3>
   <p class="para">
    If two Traits insert a method with the same name, a fatal error is produced,
    if the conflict is not explicitly resolved.
   </p>
   <p class="para">
    To resolve naming conflicts between Traits used in the same class,
    the <code class="literal">insteadof</code> operator needs to be used to choose exactly
    one of the conflicting methods.
   </p>
   <p class="para">
    Since this only allows one to exclude methods, the <code class="literal">as</code>
    operator can be used to add an alias to one of the methods. Note the
    <code class="literal">as</code> operator does not rename the method and it does not
    affect any other method either.
   </p>
   <div class="example" id="language.oop5.traits.conflict.ex1">
    <p><strong>Example #5 Conflict Resolution</strong></p>
    <div class="example-contents"><p>
      In this example, Talker uses the traits A and B.
      Since A and B have conflicting methods, it defines to use
      the variant of smallTalk from trait B, and the variant of bigTalk from
      trait A.
    </p></div>
    <div class="example-contents"><p>
      The Aliased_Talker makes use of the <code class="literal">as</code> operator
      to be able to use B&#039;s bigTalk implementation under an additional alias
      <code class="literal">talk</code>.
    </p></div>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">smallTalk</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'a'</span><span style="color: #007700">;<br />    }<br />    public function </span><span style="color: #0000BB">bigTalk</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'A'</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">B </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">smallTalk</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'b'</span><span style="color: #007700">;<br />    }<br />    public function </span><span style="color: #0000BB">bigTalk</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'B'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Talker </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">A</span><span style="color: #007700">, </span><span style="color: #0000BB">B </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">smallTalk </span><span style="color: #007700">insteadof </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">bigTalk </span><span style="color: #007700">insteadof </span><span style="color: #0000BB">B</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Aliased_Talker </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">A</span><span style="color: #007700">, </span><span style="color: #0000BB">B </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">smallTalk </span><span style="color: #007700">insteadof </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">bigTalk </span><span style="color: #007700">insteadof </span><span style="color: #0000BB">B</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">bigTalk </span><span style="color: #007700">as </span><span style="color: #0000BB">talk</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.visibility">
   <h3 class="title">Changing Method Visibility</h3>
   <p class="para">
    Using the <code class="literal">as</code> syntax, one can also adjust the visibility
    of the method in the exhibiting class.
   </p>
   <div class="example" id="language.oop5.traits.visibility.ex1">
    <p><strong>Example #6 Changing Method Visibility</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">HelloWorld </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello World!'</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Change visibility of sayHello<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass1 </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">HelloWorld </span><span style="color: #007700">{ </span><span style="color: #0000BB">sayHello </span><span style="color: #007700">as protected; }<br />}<br /><br /></span><span style="color: #FF8000">// Alias method with changed visibility<br />// sayHello visibility not changed<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass2 </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">HelloWorld </span><span style="color: #007700">{ </span><span style="color: #0000BB">sayHello </span><span style="color: #007700">as private </span><span style="color: #0000BB">myPrivateHello</span><span style="color: #007700">; }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.composition">
   <h3 class="title">Traits Composed from Traits</h3>
   <p class="para">
    Just as classes can make use of traits, so can other traits. By using one
    or more traits in a trait definition, it can be composed partially or
    entirely of the members defined in those other traits.
   </p>
   <div class="example" id="language.oop5.traits.composition.ex1">
    <p><strong>Example #7 Traits Composed from Traits</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">Hello </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHello</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello '</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">World </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'World!'</span><span style="color: #007700">;<br />    }<br />}<br /><br />trait </span><span style="color: #0000BB">HelloWorld </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">Hello</span><span style="color: #007700">, </span><span style="color: #0000BB">World</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">MyHelloWorld </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">HelloWorld</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyHelloWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayWorld</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Hello World!
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.abstract">
   <h3 class="title">Abstract Trait Members</h3>
   <p class="para">
    Traits support the use of abstract methods in order to impose requirements
    upon the exhibiting class. Public, protected, and private methods are supported.
    Prior to PHP 8.0.0, only public and protected abstract methods were supported.
   </p>
   <div class="caution"><strong class="caution">Caution</strong>
    <p class="simpara">
     As of PHP 8.0.0, the signature of a concrete method must follow the
     <a href="language.oop5.basic.php#language.oop.lsp" class="link">signature compatibility rules</a>.
     Previously, its signature might be different.
    </p>
   </div>
   <div class="example" id="language.oop5.traits.abstract.ex1">
    <p><strong>Example #8 Express Requirements by Abstract Methods</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">Hello </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">sayHelloWorld</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWorld</span><span style="color: #007700">();<br />    }<br />    abstract public function </span><span style="color: #0000BB">getWorld</span><span style="color: #007700">();<br />}<br /><br />class </span><span style="color: #0000BB">MyHelloWorld </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$world</span><span style="color: #007700">;<br />    use </span><span style="color: #0000BB">Hello</span><span style="color: #007700">;<br />    public function </span><span style="color: #0000BB">getWorld</span><span style="color: #007700">() {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">world</span><span style="color: #007700">;<br />    }<br />    public function </span><span style="color: #0000BB">setWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">world </span><span style="color: #007700">= </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.static">
   <h3 class="title">Static Trait Members</h3>
   <p class="para">
    Traits can define static variables, static methods and static properties.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     As of PHP 8.1.0, calling a static method, or accessing a static property directly on a trait is deprecated.
     Static methods and properties should only be accessed on a class using the trait.
    </p>
   </p></blockquote>
   <div class="example" id="language.oop5.traits.static.ex1">
    <p><strong>Example #9 Static Variables</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">Counter<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">inc</span><span style="color: #007700">()<br />    {<br />        static </span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$c </span><span style="color: #007700">+ </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$c</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">C1<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">Counter</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">C2<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">Counter</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">C1</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$o</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inc</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= new </span><span style="color: #0000BB">C2</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inc</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
1
1
</pre></div>
    </div>
   </div>
   <div class="example" id="language.oop5.traits.static.ex2">
    <p><strong>Example #10 Static Methods</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">StaticExample<br /></span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">doSomething</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #DD0000">'Doing something'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">StaticExample</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">Example</span><span style="color: #007700">::</span><span style="color: #0000BB">doSomething</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Doing something
</pre></div>
    </div>
   </div>
   <div class="example" id="language.oop5.traits.static.ex3">
    <p><strong>Example #11 Static Properties</strong></p>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Prior to PHP 8.3.0, static properties defined in a trait were shared
      across all classes in the same inheritance hierarchy which used that trait.
      As of PHP 8.3.0, if a child class uses a trait with a static property,
      it will be considered distinct from the one defined in the parent class.
     </p>
    </div>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">T<br /></span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">$counter </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">T</span><span style="color: #007700">;<br /><br />    public static function </span><span style="color: #0000BB">incrementCounter</span><span style="color: #007700">()<br />    {<br />        static::</span><span style="color: #0000BB">$counter</span><span style="color: #007700">++;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">T</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">incrementCounter</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">$counter</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">B</span><span style="color: #007700">::</span><span style="color: #0000BB">$counter</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 8.3:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
2
1
</pre></div>
    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.traits.properties">
   <h3 class="title">Properties</h3>
   <p class="para">
    Traits can also define properties.
   </p>
   <div class="example" id="language.oop5.traits.properties.example">
    <p><strong>Example #12 Defining Properties</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">PropertiesTrait<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">PropertiesExample<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">PropertiesTrait</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= new </span><span style="color: #0000BB">PropertiesExample</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">x</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    If a trait defines a property then a class can not define a property with
    the same name unless it is compatible (same visibility and type,
    readonly modifier, and initial value), otherwise a fatal error is issued.
   </p>
   <div class="example" id="language.oop5.traits.properties.conflicts">
    <p><strong>Example #13 Conflict Resolution</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">PropertiesTrait </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$same </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$different1 </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">bool $different2</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">bool $different3</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">PropertiesExample </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">PropertiesTrait</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$same </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$different1 </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal error<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $different2</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal error<br />    </span><span style="color: #007700">readonly protected </span><span style="color: #0000BB">bool $different3</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal error<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

 <div class="sect2" id="language.oop5.traits.constants">
  <h3 class="title">Constants</h3>
  <p class="para">
   Traits can, as of PHP 8.2.0, also define constants.
  </p>
  <div class="example" id="language.oop5.traits.constants.example">
   <p><strong>Example #14 Defining Constants</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">ConstantsTrait </span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">FLAG_MUTABLE </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    final public const </span><span style="color: #0000BB">FLAG_IMMUTABLE </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">ConstantsExample </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">ConstantsTrait</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= new </span><span style="color: #0000BB">ConstantsExample</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$example</span><span style="color: #007700">::</span><span style="color: #0000BB">FLAG_MUTABLE</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
1
</pre></div>
    </div>
  </div>
  <p class="para">
   If a trait defines a constant then a class can not define a constant with
   the same name unless it is compatible (same visibility, initial value, and
   finality), otherwise a fatal error is issued.
  </p>
  <div class="example" id="language.oop5.traits.constants.conflicts">
   <p><strong>Example #15 Conflict Resolution</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">ConstantsTrait </span><span style="color: #007700">{<br />    public const </span><span style="color: #0000BB">FLAG_MUTABLE </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    final public const </span><span style="color: #0000BB">FLAG_IMMUTABLE </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">ConstantsExample </span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">ConstantsTrait</span><span style="color: #007700">;<br />    public const </span><span style="color: #0000BB">FLAG_IMMUTABLE </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal error<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="language.oop5.traits.final-methods">
  <h3 class="title">Final methods</h3>
  <p class="simpara">
   As of PHP 8.3.0, the <a href="language.oop5.final.php" class="link">final</a>
   modifier can be applied using the <code class="literal">as</code> operator
   to methods imported from traits. This can be used to prevent child classes
   from overriding the method. However, the class that uses the trait can still
   override the method.
  </p>
  <div class="example" id="language.oop5.traits.final-methods.example">
   <p><strong>Example #16 Defining a method coming from a trait as <code class="literal">final</code></strong></p>
   <div class="example-contents">
    <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">trait </span><span style="color: #0000BB">CommonTrait<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">method</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">'Hello'</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">FinalExampleA<br /></span><span style="color: #007700">{<br />    use </span><span style="color: #0000BB">CommonTrait </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">CommonTrait</span><span style="color: #007700">::</span><span style="color: #0000BB">method </span><span style="color: #007700">as final; </span><span style="color: #FF8000">// The 'final' prevents child classes from overriding the method<br />    </span><span style="color: #007700">}<br />}<br /><br />class </span><span style="color: #0000BB">FinalExampleB </span><span style="color: #007700">extends </span><span style="color: #0000BB">FinalExampleA<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">method</span><span style="color: #007700">() {}<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Fatal error: Cannot override final method FinalExampleA::method() in ...
</pre></div>
    </div>
  </div>
 </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/traits.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.traits%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.traits&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.traits.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">25 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107965">  <div class="votes">
    <div id="Vu107965">
    <a href="/manual/vote-note.php?id=107965&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107965">
    <a href="/manual/vote-note.php?id=107965&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107965" title="88% like this...">
    659
    </div>
  </div>
  <a href="#107965" class="name">
  <strong class="user"><em>Safak Ozpinar / safakozpinar at gmail</em></strong></a><a class="genanchor" href="#107965"> &para;</a><div class="date" title="2012-03-18 03:03"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107965">
<div class="phpcode"><code><span class="html">Unlike inheritance; if a trait has static properties, each class using that trait has independent instances of those properties.<br /><br />Example using parent class:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestClass </span><span class="keyword">{<br />    public static </span><span class="default">$_bar</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo1 </span><span class="keyword">extends </span><span class="default">TestClass </span><span class="keyword">{ }<br />class </span><span class="default">Foo2 </span><span class="keyword">extends </span><span class="default">TestClass </span><span class="keyword">{ }<br /></span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">;<br /></span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'World'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; </span><span class="comment">// Prints: World World<br /></span><span class="default">?&gt;<br /></span><br />Example using trait:<br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">TestTrait </span><span class="keyword">{<br />    public static </span><span class="default">$_bar</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo1 </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo2 </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br /></span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">;<br /></span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'World'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; </span><span class="comment">// Prints: Hello World<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107548">  <div class="votes">
    <div id="Vu107548">
    <a href="/manual/vote-note.php?id=107548&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107548">
    <a href="/manual/vote-note.php?id=107548&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107548" title="91% like this...">
    460
    </div>
  </div>
  <a href="#107548" class="name">
  <strong class="user"><em>greywire at gmail dot com</em></strong></a><a class="genanchor" href="#107548"> &para;</a><div class="date" title="2012-02-16 07:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107548">
<div class="phpcode"><code><span class="html">The best way to understand what traits are and how to use them is to look at them for what they essentially are:  language assisted copy and paste.<br /><br />If you can copy and paste the code from one class to another (and we've all done this, even though we try not to because its code duplication) then you have a candidate for a trait.</span></code></div>
  </div>
 </div>
  <div class="note" id="113047">  <div class="votes">
    <div id="Vu113047">
    <a href="/manual/vote-note.php?id=113047&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113047">
    <a href="/manual/vote-note.php?id=113047&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113047" title="89% like this...">
    256
    </div>
  </div>
  <a href="#113047" class="name">
  <strong class="user"><em>Stefan W</em></strong></a><a class="genanchor" href="#113047"> &para;</a><div class="date" title="2013-08-22 10:03"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113047">
<div class="phpcode"><code><span class="html">Note that the "use" operator for traits (inside a class) and the "use" operator for namespaces (outside the class) resolve names differently. "use" for namespaces always sees its arguments as absolute (starting at the global namespace):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Foo\Bar</span><span class="keyword">;<br />use </span><span class="default">Foo\Test</span><span class="keyword">;  </span><span class="comment">// means \Foo\Test - the initial \ is optional<br /></span><span class="default">?&gt;<br /></span><br />On the other hand, "use" for traits respects the current namespace:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Foo\Bar</span><span class="keyword">;<br />class </span><span class="default">SomeClass </span><span class="keyword">{<br />    use </span><span class="default">Foo\Test</span><span class="keyword">;   </span><span class="comment">// means \Foo\Bar\Foo\Test<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Together with "use" for closures, there are now three different "use" operators. They all mean different things and behave differently.</span></code></div>
  </div>
 </div>
  <div class="note" id="109508">  <div class="votes">
    <div id="Vu109508">
    <a href="/manual/vote-note.php?id=109508&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109508">
    <a href="/manual/vote-note.php?id=109508&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109508" title="86% like this...">
    107
    </div>
  </div>
  <a href="#109508" class="name">
  <strong class="user"><em>t8 at  AT pobox dot com</em></strong></a><a class="genanchor" href="#109508"> &para;</a><div class="date" title="2012-07-23 08:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109508">
<div class="phpcode"><code><span class="html">Another difference with traits vs inheritance is that methods defined in traits can access methods and properties of the class they're used in, including private ones.<br /><br />For example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">MyTrait<br /></span><span class="keyword">{<br />  protected function </span><span class="default">accessVar</span><span class="keyword">()<br />  {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">var</span><span class="keyword">;<br />  }<br /><br />}<br /><br />class </span><span class="default">TraitUser<br /></span><span class="keyword">{<br />  use </span><span class="default">MyTrait</span><span class="keyword">;<br /><br />  private </span><span class="default">$var </span><span class="keyword">= </span><span class="string">'var'</span><span class="keyword">;<br /><br />  public function </span><span class="default">getVar</span><span class="keyword">()<br />  {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">accessVar</span><span class="keyword">();<br />  }<br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">TraitUser</span><span class="keyword">();<br />echo </span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">getVar</span><span class="keyword">(); </span><span class="comment">// -&gt; 'var'                                                                                                                                                                                                                          <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106958">  <div class="votes">
    <div id="Vu106958">
    <a href="/manual/vote-note.php?id=106958&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106958">
    <a href="/manual/vote-note.php?id=106958&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106958" title="85% like this...">
    101
    </div>
  </div>
  <a href="#106958" class="name">
  <strong class="user"><em>chris dot rutledge at gmail dot com</em></strong></a><a class="genanchor" href="#106958"> &para;</a><div class="date" title="2011-12-21 12:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106958">
<div class="phpcode"><code><span class="html">It may be worth noting here that the magic constant __CLASS__ becomes even more magical - __CLASS__ will return the name of the class in which the trait is being used.<br /><br />for example<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">sayWhere </span><span class="keyword">{<br />    public function </span><span class="default">whereAmI</span><span class="keyword">() {<br />        echo </span><span class="default">__CLASS__</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Hello </span><span class="keyword">{<br />    use </span><span class="default">sayWHere</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">World </span><span class="keyword">{<br />    use </span><span class="default">sayWHere</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Hello</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">whereAmI</span><span class="keyword">(); </span><span class="comment">//Hello<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">World</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">whereAmI</span><span class="keyword">(); </span><span class="comment">//World<br /></span><span class="default">?&gt;<br /></span><br />The magic constant __TRAIT__ will giev you the name of the trait</span></code></div>
  </div>
 </div>
  <div class="note" id="116907">  <div class="votes">
    <div id="Vu116907">
    <a href="/manual/vote-note.php?id=116907&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116907">
    <a href="/manual/vote-note.php?id=116907&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116907" title="82% like this...">
    61
    </div>
  </div>
  <a href="#116907" class="name">
  <strong class="user"><em>qeremy (!) gmail</em></strong></a><a class="genanchor" href="#116907"> &para;</a><div class="date" title="2015-03-19 10:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116907">
<div class="phpcode"><code><span class="html">Keep in mind; "final" keyword is useless in traits when directly using them, unlike extending classes / abstract classes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">Foo </span><span class="keyword">{<br />    final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"</span><span class="default">$s</span><span class="string">, hello!"</span><span class="keyword">; }<br />}<br />class </span><span class="default">Bar </span><span class="keyword">{<br />    use </span><span class="default">Foo</span><span class="keyword">;<br />    </span><span class="comment">// Overwrite, no error<br />    </span><span class="keyword">final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"hello, </span><span class="default">$s</span><span class="string">!"</span><span class="keyword">; }<br />}<br /><br />abstract class </span><span class="default">Foo </span><span class="keyword">{<br />    final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"</span><span class="default">$s</span><span class="string">, hello!"</span><span class="keyword">; }<br />}<br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Foo </span><span class="keyword">{<br />    </span><span class="comment">// Fatal error: Cannot override final method Foo::hello() in ..<br />    </span><span class="keyword">final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"hello, </span><span class="default">$s</span><span class="string">!"</span><span class="keyword">; }<br />}<br /></span><span class="default">?&gt;<br /></span><br />But this way will finalize trait methods as expected;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">FooTrait </span><span class="keyword">{<br />    final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"</span><span class="default">$s</span><span class="string">, hello!"</span><span class="keyword">; }<br />}<br />abstract class </span><span class="default">Foo </span><span class="keyword">{<br />    use </span><span class="default">FooTrait</span><span class="keyword">;<br />}<br />class </span><span class="default">Bar </span><span class="keyword">extends </span><span class="default">Foo </span><span class="keyword">{<br />    </span><span class="comment">// Fatal error: Cannot override final method Foo::hello() in ..<br />    </span><span class="keyword">final public function </span><span class="default">hello</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) { print </span><span class="string">"hello, </span><span class="default">$s</span><span class="string">!"</span><span class="keyword">; }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123648">  <div class="votes">
    <div id="Vu123648">
    <a href="/manual/vote-note.php?id=123648&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123648">
    <a href="/manual/vote-note.php?id=123648&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123648" title="82% like this...">
    11
    </div>
  </div>
  <a href="#123648" class="name">
  <strong class="user"><em>yeu_ym at yahoo dot com</em></strong></a><a class="genanchor" href="#123648"> &para;</a><div class="date" title="2019-03-02 04:03"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123648">
<div class="phpcode"><code><span class="html">Here is an example how to work with visiblity and conflicts.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">A<br /></span><span class="keyword">{<br />    private function </span><span class="default">smallTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'a'</span><span class="keyword">;<br />    }<br /><br />    private function </span><span class="default">bigTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'A'</span><span class="keyword">;<br />    }<br />}<br /><br />trait </span><span class="default">B<br /></span><span class="keyword">{<br />    private function </span><span class="default">smallTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'b'</span><span class="keyword">;<br />    }<br /><br />    private function </span><span class="default">bigTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'B'</span><span class="keyword">;<br />    }<br />}<br /><br />trait </span><span class="default">C<br /></span><span class="keyword">{<br />    public function </span><span class="default">smallTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'c'</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">bigTalk</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'C'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Talker<br /></span><span class="keyword">{<br />    use </span><span class="default">A</span><span class="keyword">, </span><span class="default">B</span><span class="keyword">, </span><span class="default">C </span><span class="keyword">{<br />        </span><span class="comment">//visibility for methods that will be involved in conflict resolution<br />        </span><span class="default">B</span><span class="keyword">::</span><span class="default">smallTalk </span><span class="keyword">as public;<br />        </span><span class="default">A</span><span class="keyword">::</span><span class="default">bigTalk </span><span class="keyword">as public;<br /><br />        </span><span class="comment">//conflict resolution<br />        </span><span class="default">B</span><span class="keyword">::</span><span class="default">smallTalk </span><span class="keyword">insteadof </span><span class="default">A</span><span class="keyword">, </span><span class="default">C</span><span class="keyword">;<br />        </span><span class="default">A</span><span class="keyword">::</span><span class="default">bigTalk </span><span class="keyword">insteadof </span><span class="default">B</span><span class="keyword">, </span><span class="default">C</span><span class="keyword">;<br /><br />        </span><span class="comment">//aliases with visibility change<br />        </span><span class="default">B</span><span class="keyword">::</span><span class="default">bigTalk </span><span class="keyword">as public </span><span class="default">Btalk</span><span class="keyword">;<br />        </span><span class="default">A</span><span class="keyword">::</span><span class="default">smallTalk </span><span class="keyword">as public </span><span class="default">asmalltalk</span><span class="keyword">;<br />        <br />        </span><span class="comment">//aliases only, methods already defined as public<br />        </span><span class="default">C</span><span class="keyword">::</span><span class="default">bigTalk </span><span class="keyword">as </span><span class="default">Ctalk</span><span class="keyword">;<br />        </span><span class="default">C</span><span class="keyword">::</span><span class="default">smallTalk </span><span class="keyword">as </span><span class="default">cmallstalk</span><span class="keyword">;<br />    }<br /><br />}<br /><br />(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">bigTalk</span><span class="keyword">();</span><span class="comment">//A<br /></span><span class="keyword">(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">Btalk</span><span class="keyword">();</span><span class="comment">//B<br /></span><span class="keyword">(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">Ctalk</span><span class="keyword">();</span><span class="comment">//C<br /><br /></span><span class="keyword">(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">asmalltalk</span><span class="keyword">();</span><span class="comment">//a<br /></span><span class="keyword">(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">smallTalk</span><span class="keyword">();</span><span class="comment">//b<br /></span><span class="keyword">(new </span><span class="default">Talker</span><span class="keyword">)-&gt;</span><span class="default">cmallstalk</span><span class="keyword">();</span><span class="comment">//c</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128242">  <div class="votes">
    <div id="Vu128242">
    <a href="/manual/vote-note.php?id=128242&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128242">
    <a href="/manual/vote-note.php?id=128242&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128242" title="76% like this...">
    9
    </div>
  </div>
  <a href="#128242" class="name">
  <strong class="user"><em>JustAddingSomeAdditionalUseCase</em></strong></a><a class="genanchor" href="#128242"> &para;</a><div class="date" title="2023-02-22 11:14"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128242">
<div class="phpcode"><code><span class="html">I have not seen this specific use case:<br /><br />"Wanting to preserve action of parent class method, the trait one calling ::parent &amp; also the child class mehod action".<br /><br />// Child class.<br />use SuperTrait {<br />  initialize as initializeOr;<br />}<br />public function initialize(array &amp;$element) {<br />  ...<br />  $this-&gt;initializeOr($element);<br />}<br />// Trait.<br />public function initialize(array &amp;$element) {<br />  ...<br />  parent::initialize($element);<br />}<br />// Parent class.<br />public function initialize(array &amp;$element) {<br />  ...<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119872">  <div class="votes">
    <div id="Vu119872">
    <a href="/manual/vote-note.php?id=119872&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119872">
    <a href="/manual/vote-note.php?id=119872&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119872" title="76% like this...">
    32
    </div>
  </div>
  <a href="#119872" class="name">
  <strong class="user"><em>canufrank</em></strong></a><a class="genanchor" href="#119872"> &para;</a><div class="date" title="2016-09-10 06:57"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119872">
<div class="phpcode"><code><span class="html">A number of the notes make incorrect assertions about trait behaviour because they do not extend the class.<br /><br />So, while "Unlike inheritance; if a trait has static properties, each class using that trait has independent instances of those properties.<br /><br />Example using parent class:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestClass </span><span class="keyword">{<br />    public static </span><span class="default">$_bar</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo1 </span><span class="keyword">extends </span><span class="default">TestClass </span><span class="keyword">{ }<br />class </span><span class="default">Foo2 </span><span class="keyword">extends </span><span class="default">TestClass </span><span class="keyword">{ }<br /></span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">;<br /></span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'World'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; </span><span class="comment">// Prints: World World<br /></span><span class="default">?&gt;<br /></span><br />Example using trait:<br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">TestTrait </span><span class="keyword">{<br />    public static </span><span class="default">$_bar</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo1 </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br />class </span><span class="default">Foo2 </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br /></span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">;<br /></span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'World'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; </span><span class="comment">// Prints: Hello World<br /></span><span class="default">?&gt;</span>"<br /><br />shows a correct example, simply adding<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once(</span><span class="string">'above'</span><span class="keyword">);<br />class </span><span class="default">Foo3 </span><span class="keyword">extends </span><span class="default">Foo2 </span><span class="keyword">{<br />}<br /></span><span class="default">Foo3</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'news'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo3</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; <br /><br /></span><span class="comment">// Prints: Hello news news<br /><br /></span><span class="default">I think the best conceptual model of an incorporated </span><span class="keyword">trait </span><span class="default">is an advanced insertion of text</span><span class="keyword">, or as </span><span class="default">someone put it </span><span class="string">"language assisted copy and paste." </span><span class="keyword">If </span><span class="default">Foo1 </span><span class="keyword">and </span><span class="default">Foo2 were defined with $_bar</span><span class="keyword">, </span><span class="default">you would not expect them to share the instance</span><span class="keyword">. </span><span class="default">Similarly</span><span class="keyword">, </span><span class="default">you would expect Foo3 to share with Foo2</span><span class="keyword">, and </span><span class="default">it does</span><span class="keyword">.<br /><br /></span><span class="default">Viewing this way explains away a lot of  the </span><span class="string">'quirks' </span><span class="default">that are observed above with </span><span class="keyword">final, or </span><span class="default">subsequently declared </span><span class="keyword">private </span><span class="default">vars</span><span class="keyword">,</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122773">  <div class="votes">
    <div id="Vu122773">
    <a href="/manual/vote-note.php?id=122773&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122773">
    <a href="/manual/vote-note.php?id=122773&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122773" title="74% like this...">
    15
    </div>
  </div>
  <a href="#122773" class="name">
  <strong class="user"><em>rawsrc</em></strong></a><a class="genanchor" href="#122773"> &para;</a><div class="date" title="2018-05-29 06:35"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122773">
<div class="phpcode"><code><span class="html">About the (Safak Ozpinar / safakozpinar at gmail)'s great note, you can still have the same behavior than inheritance using trait with this approach : <br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">TestTrait </span><span class="keyword">{<br />    public static </span><span class="default">$_bar</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">FooBar </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">Foo1 </span><span class="keyword">extends </span><span class="default">FooBar </span><span class="keyword">{<br /><br />}<br />class </span><span class="default">Foo2 </span><span class="keyword">extends </span><span class="default">FooBar </span><span class="keyword">{<br /><br />}<br /></span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'Hello'</span><span class="keyword">;<br /></span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">= </span><span class="string">'World'</span><span class="keyword">;<br />echo </span><span class="default">Foo1</span><span class="keyword">::</span><span class="default">$_bar </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">Foo2</span><span class="keyword">::</span><span class="default">$_bar</span><span class="keyword">; </span><span class="comment">// Prints: World World</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114383">  <div class="votes">
    <div id="Vu114383">
    <a href="/manual/vote-note.php?id=114383&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114383">
    <a href="/manual/vote-note.php?id=114383&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114383" title="72% like this...">
    13
    </div>
  </div>
  <a href="#114383" class="name">
  <strong class="user"><em>qschuler at neosyne dot com</em></strong></a><a class="genanchor" href="#114383"> &para;</a><div class="date" title="2014-02-14 08:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114383">
<div class="phpcode"><code><span class="html">Note that you can omit a method's inclusion by excluding it from one trait in favor of the other and doing the exact same thing in the reverse way.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">sayHello</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'Hello from A'</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">sayWorld</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'World from A'</span><span class="keyword">;<br />    }<br />}<br /><br />trait </span><span class="default">B </span><span class="keyword">{<br />    public function </span><span class="default">sayHello</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'Hello from B'</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">sayWorld</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">'World from B'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Talker </span><span class="keyword">{<br />    use </span><span class="default">A</span><span class="keyword">, </span><span class="default">B </span><span class="keyword">{<br />        </span><span class="default">A</span><span class="keyword">::</span><span class="default">sayHello </span><span class="keyword">insteadof </span><span class="default">B</span><span class="keyword">;<br />        </span><span class="default">A</span><span class="keyword">::</span><span class="default">sayWorld </span><span class="keyword">insteadof </span><span class="default">B</span><span class="keyword">;<br />        </span><span class="default">B</span><span class="keyword">::</span><span class="default">sayWorld </span><span class="keyword">insteadof </span><span class="default">A</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$talker </span><span class="keyword">= new </span><span class="default">Talker</span><span class="keyword">();<br /></span><span class="default">$talker</span><span class="keyword">-&gt;</span><span class="default">sayHello</span><span class="keyword">();<br /></span><span class="default">$talker</span><span class="keyword">-&gt;</span><span class="default">sayWorld</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />The method sayHello is imported, but the method sayWorld is simply excluded.</span></code></div>
  </div>
 </div>
  <div class="note" id="121780">  <div class="votes">
    <div id="Vu121780">
    <a href="/manual/vote-note.php?id=121780&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121780">
    <a href="/manual/vote-note.php?id=121780&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121780" title="70% like this...">
    7
    </div>
  </div>
  <a href="#121780" class="name">
  <strong class="user"><em>katrinaelaine6 at gmail dot com</em></strong></a><a class="genanchor" href="#121780"> &para;</a><div class="date" title="2017-10-19 08:56"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121780">
<div class="phpcode"><code><span class="html">Adding to "atorich at gmail dot com":<br /><br />The behavior of the magic constant __CLASS__ when used in traits is as expected if you understand traits and late static binding (<a href="http://php.net/manual/en/language.oop5.late-static-bindings.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.oop5.late-static-bindings.php</a>).<br /><br /><span class="default">&lt;?php<br /><br />$format </span><span class="keyword">= </span><span class="string">'Class: %-13s | get_class(): %-13s | get_called_class(): %-13s%s'</span><span class="keyword">;<br /><br />trait </span><span class="default">TestTrait </span><span class="keyword">{<br />    public function </span><span class="default">testMethod</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">testStatic</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />}<br /><br />trait </span><span class="default">DuplicateTrait </span><span class="keyword">{<br />    public function </span><span class="default">duplMethod</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">duplStatic</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />}<br /><br />abstract class </span><span class="default">AbstractClass </span><span class="keyword">{<br />    <br />    use </span><span class="default">DuplicateTrait</span><span class="keyword">;<br />    <br />    public function </span><span class="default">absMethod</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />    <br />    public static function </span><span class="default">absStatic</span><span class="keyword">() {<br />        global </span><span class="default">$format</span><span class="keyword">;<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(), </span><span class="default">get_called_class</span><span class="keyword">(), </span><span class="default">PHP_EOL</span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">BaseClass </span><span class="keyword">extends </span><span class="default">AbstractClass </span><span class="keyword">{<br />    use </span><span class="default">TestTrait</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">TestClass </span><span class="keyword">extends </span><span class="default">BaseClass </span><span class="keyword">{ }<br /><br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">TestClass</span><span class="keyword">();<br /><br /></span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">testMethod</span><span class="keyword">();<br /></span><span class="default">TestClass</span><span class="keyword">::</span><span class="default">testStatic</span><span class="keyword">();<br /><br /></span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">absMethod</span><span class="keyword">();<br /></span><span class="default">TestClass</span><span class="keyword">::</span><span class="default">absStatic</span><span class="keyword">();<br /><br /></span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">duplMethod</span><span class="keyword">();<br /></span><span class="default">TestClass</span><span class="keyword">::</span><span class="default">duplStatic</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Will output:<br /><br />Class: BaseClass     | get_class(): BaseClass     | get_called_class(): TestClass    <br />Class: BaseClass     | get_class(): BaseClass     | get_called_class(): TestClass    <br />Class: AbstractClass | get_class(): AbstractClass | get_called_class(): TestClass    <br />Class: AbstractClass | get_class(): AbstractClass | get_called_class(): TestClass    <br />Class: AbstractClass | get_class(): AbstractClass | get_called_class(): TestClass    <br />Class: AbstractClass | get_class(): AbstractClass | get_called_class(): TestClass<br /><br />Since Traits are considered literal "copying/pasting" of code, it's clear how the methods defined in DuplicateTrait give the same results as the methods defined in AbstractClass.</span></code></div>
  </div>
 </div>
  <div class="note" id="107735">  <div class="votes">
    <div id="Vu107735">
    <a href="/manual/vote-note.php?id=107735&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107735">
    <a href="/manual/vote-note.php?id=107735&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107735" title="71% like this...">
    18
    </div>
  </div>
  <a href="#107735" class="name">
  <strong class="user"><em>Edward</em></strong></a><a class="genanchor" href="#107735"> &para;</a><div class="date" title="2012-03-01 03:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107735">
<div class="phpcode"><code><span class="html">The difference between Traits and multiple inheritance is in the inheritance part.   A trait is not inherited from, but rather included or mixed-in, thus becoming part of "this class".   Traits also provide a more controlled means of resolving conflicts that inevitably arise when using multiple inheritance in the few languages that support them (C++).  Most modern languages are going the approach of a "traits" or "mixin" style system as opposed to multiple-inheritance, largely due to the ability to control ambiguities if a method is declared in multiple "mixed-in" classes.<br /><br />Also, one can not "inherit" static member functions in multiple-inheritance.</span></code></div>
  </div>
 </div>
  <div class="note" id="120038">  <div class="votes">
    <div id="Vu120038">
    <a href="/manual/vote-note.php?id=120038&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120038">
    <a href="/manual/vote-note.php?id=120038&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120038" title="68% like this...">
    17
    </div>
  </div>
  <a href="#120038" class="name">
  <strong class="user"><em>marko at newvibrations dot net</em></strong></a><a class="genanchor" href="#120038"> &para;</a><div class="date" title="2016-10-13 12:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120038">
<div class="phpcode"><code><span class="html">As already noted, static properties and methods in trait could be accessed directly using trait. Since trait is language assisted c/p, you should be aware that static property from trait will be initialized to the value trait property had in the time of class declaration. <br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">Beer </span><span class="keyword">{<br />    protected static </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'Light'</span><span class="keyword">;<br />    public static function </span><span class="default">printed</span><span class="keyword">(){<br />        echo static::</span><span class="default">$type</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">setType</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">){<br />        static::</span><span class="default">$type </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Ale </span><span class="keyword">{<br />    use </span><span class="default">Beer</span><span class="keyword">;<br />}<br /><br /></span><span class="default">Beer</span><span class="keyword">::</span><span class="default">setType</span><span class="keyword">(</span><span class="string">"Dark"</span><span class="keyword">);<br /><br />class </span><span class="default">Lager </span><span class="keyword">{<br />    use </span><span class="default">Beer</span><span class="keyword">;<br />}<br /><br /></span><span class="default">Beer</span><span class="keyword">::</span><span class="default">setType</span><span class="keyword">(</span><span class="string">"Amber"</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: text/plain"</span><span class="keyword">);<br /><br /></span><span class="default">Beer</span><span class="keyword">::</span><span class="default">printed</span><span class="keyword">();  </span><span class="comment">// Prints: Amber<br /></span><span class="default">Ale</span><span class="keyword">::</span><span class="default">printed</span><span class="keyword">();   </span><span class="comment">// Prints: Light<br /></span><span class="default">Lager</span><span class="keyword">::</span><span class="default">printed</span><span class="keyword">(); </span><span class="comment">// Prints: Dark<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118718">  <div class="votes">
    <div id="Vu118718">
    <a href="/manual/vote-note.php?id=118718&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118718">
    <a href="/manual/vote-note.php?id=118718&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118718" title="69% like this...">
    9
    </div>
  </div>
  <a href="#118718" class="name">
  <strong class="user"><em>balbuf</em></strong></a><a class="genanchor" href="#118718"> &para;</a><div class="date" title="2016-01-25 03:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118718">
<div class="phpcode"><code><span class="html">(It's already been said, but for the sake of searching on the word "relative"...)<br /><br />The "use" keyword to import a trait into a class will resolve relative to the current namespace and therefore should include a leading slash to represent a full path, whereas "use" at the namespace level is always absolute.</span></code></div>
  </div>
 </div>
  <div class="note" id="108293">  <div class="votes">
    <div id="Vu108293">
    <a href="/manual/vote-note.php?id=108293&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108293">
    <a href="/manual/vote-note.php?id=108293&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108293" title="68% like this...">
    43
    </div>
  </div>
  <a href="#108293" class="name">
  <strong class="user"><em>ryan at derokorian dot com</em></strong></a><a class="genanchor" href="#108293"> &para;</a><div class="date" title="2012-04-15 02:03"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108293">
<div class="phpcode"><code><span class="html">Simple singleton trait.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">singleton </span><span class="keyword">{    <br />    </span><span class="comment">/**<br />     * private construct, generally defined by using class<br />     */<br />    //private function __construct() {}<br />    <br />    </span><span class="keyword">public static function </span><span class="default">getInstance</span><span class="keyword">() {<br />        static </span><span class="default">$_instance </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">__CLASS__</span><span class="keyword">;<br />        return </span><span class="default">$_instance </span><span class="keyword">?: </span><span class="default">$_instance </span><span class="keyword">= new </span><span class="default">$class</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">__clone</span><span class="keyword">() {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Cloning '</span><span class="keyword">.</span><span class="default">__CLASS__</span><span class="keyword">.</span><span class="string">' is not allowed.'</span><span class="keyword">,</span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />    }<br />    <br />    public function </span><span class="default">__wakeup</span><span class="keyword">() {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Unserializing '</span><span class="keyword">.</span><span class="default">__CLASS__</span><span class="keyword">.</span><span class="string">' is not allowed.'</span><span class="keyword">,</span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">/**<br /> * Example Usage<br /> */<br /><br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />    use </span><span class="default">singleton</span><span class="keyword">;<br />    <br />    private function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">bar </span><span class="keyword">{<br />    use </span><span class="default">singleton</span><span class="keyword">;<br />    <br />    private function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">foo</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br /><br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="default">bar</span><span class="keyword">::</span><span class="default">getInstance</span><span class="keyword">();<br />echo </span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121823">  <div class="votes">
    <div id="Vu121823">
    <a href="/manual/vote-note.php?id=121823&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121823">
    <a href="/manual/vote-note.php?id=121823&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121823" title="69% like this...">
    5
    </div>
  </div>
  <a href="#121823" class="name">
  <strong class="user"><em>bscheshirwork at gmail dot com</em></strong></a><a class="genanchor" href="#121823"> &para;</a><div class="date" title="2017-11-03 02:04"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121823">
<div class="phpcode"><code><span class="html"><a href="https://3v4l.org/mFuQE" rel="nofollow" target="_blank">https://3v4l.org/mFuQE</a><br /><br />1. no deprecate if same-class-named method get from trait<br />2. replace same-named method ba to aa in C<br /><br />trait ATrait {<br />    public function a(){<br />        return 'Aa';<br />    }<br />}<br /><br />trait BTrait {<br />    public function a(){<br />        return 'Ba';<br />    }<br />}<br /><br />class C {<br />    use ATrait{<br />        a as aa;<br />    }<br />    use BTrait{<br />        a as ba;<br />    }<br />    <br />    public function a() {<br />        return static::aa() . static::ba();<br />    }<br />}<br /><br />$o = new C;<br />echo $o-&gt;a(), "\n";<br /><br />class D {<br />    use ATrait{<br />        ATrait::a as aa;<br />    }<br />    use BTrait{<br />        BTrait::a as ba;<br />    }<br />    <br />    public function a() {<br />        return static::aa() . static::ba();<br />    }<br />}<br /><br />$o = new D;<br />echo $o-&gt;a(), "\n";<br /><br />class E {<br />    use ATrait{<br />        ATrait::a as aa;<br />        ATrait::a insteadof BTrait;<br />    }<br />    use BTrait{<br />        BTrait::a as ba;<br />    }<br />    <br />    public function e() {<br />        return static::aa() . static::ba();<br />    }<br />}<br /><br />$o = new E;<br />echo $o-&gt;e(), "\n";<br /><br />class F {<br />    use ATrait{<br />        a as aa;<br />    }<br />    use BTrait{<br />        a as ba;<br />    }<br />    <br />    public function f() {<br />        return static::aa() . static::ba();<br />    }<br />}<br /><br />$o = new F;<br />echo $o-&gt;f(), "\n";<br /><br />AaAa <br />AaBa <br /><br />Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; E has a deprecated constructor in /in/mFuQE on line 48 <br />AaBa <br /><br />Fatal error: Trait method a has not been applied, because there are collisions with other trait methods on F in /in/mFuQE on line 65</span></code></div>
  </div>
 </div>
  <div class="note" id="119077">  <div class="votes">
    <div id="Vu119077">
    <a href="/manual/vote-note.php?id=119077&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119077">
    <a href="/manual/vote-note.php?id=119077&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119077" title="66% like this...">
    6
    </div>
  </div>
  <a href="#119077" class="name">
  <strong class="user"><em>Carlos Alberto Bertholdo Carucce</em></strong></a><a class="genanchor" href="#119077"> &para;</a><div class="date" title="2016-03-29 06:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119077">
<div class="phpcode"><code><span class="html">If you want to resolve name conflicts and also change the visibility of a trait method, you'll need to declare both in the same line:<br /><br />trait testTrait{<br />    <br />    public function test(){<br />        echo 'trait test';<br />    }<br />    <br />}<br /><br />class myClass{<br />    <br />    use testTrait {<br />        testTrait::test as private testTraitF;<br />    }<br />    <br />    public function test(){<br />        echo 'class test';<br />        echo '&lt;br/&gt;';<br />        $this-&gt;testTraitF();<br />    }<br />    <br />}<br /><br />$obj = new myClass(); <br />$obj-&gt;test(); //prints both 'trait test' and 'class test'<br />$obj-&gt;testTraitF(); //The method is not accessible (Fatal error: Call to private method myClass::testTraitF() )</span></code></div>
  </div>
 </div>
  <div class="note" id="110521">  <div class="votes">
    <div id="Vu110521">
    <a href="/manual/vote-note.php?id=110521&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110521">
    <a href="/manual/vote-note.php?id=110521&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110521" title="64% like this...">
    13
    </div>
  </div>
  <a href="#110521" class="name">
  <strong class="user"><em>D. Marti</em></strong></a><a class="genanchor" href="#110521"> &para;</a><div class="date" title="2012-11-01 03:25"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110521">
<div class="phpcode"><code><span class="html">Traits are useful for strategies, when you want the same data to be handled (filtered, sorted, etc) differently.<br /><br />For example, you have a list of products that you want to filter out based on some criteria (brands, specs, whatever), or sorted by different means (price, label, whatever). You can create a sorting trait that contains different functions for different sorting types (numeric, string, date, etc). You can then use this trait not only in your product class (as given in the example), but also in other classes that need similar strategies (to apply a numeric sort to some data, etc).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">SortStrategy </span><span class="keyword">{<br />    private </span><span class="default">$sort_field </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    private function </span><span class="default">string_asc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        return </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">], </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]);<br />    }<br />    private function </span><span class="default">string_desc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        return </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">], </span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]);<br />    }<br />    private function </span><span class="default">num_asc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        if (</span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] == </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]) return </span><span class="default">0</span><span class="keyword">;<br />        return (</span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] &lt; </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">);<br />    }<br />    private function </span><span class="default">num_desc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        if (</span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] == </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]) return </span><span class="default">0</span><span class="keyword">;<br />        return (</span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] &gt; </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">] ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">);<br />    }<br />    private function </span><span class="default">date_asc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        </span><span class="default">$date1 </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]));<br />        </span><span class="default">$date2 </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]));<br />        if (</span><span class="default">$date1 </span><span class="keyword">== </span><span class="default">$date2</span><span class="keyword">) return </span><span class="default">0</span><span class="keyword">;<br />        return (</span><span class="default">$date1 </span><span class="keyword">&lt; </span><span class="default">$date2 </span><span class="keyword">? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">);<br />    }<br />    private function </span><span class="default">date_desc</span><span class="keyword">(</span><span class="default">$item1</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">) {<br />        </span><span class="default">$date1 </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$item1</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]));<br />        </span><span class="default">$date2 </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$item2</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field</span><span class="keyword">]));<br />        if (</span><span class="default">$date1 </span><span class="keyword">== </span><span class="default">$date2</span><span class="keyword">) return </span><span class="default">0</span><span class="keyword">;<br />        return (</span><span class="default">$date1 </span><span class="keyword">&gt; </span><span class="default">$date2 </span><span class="keyword">? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1 </span><span class="keyword">);<br />    }<br />}<br /><br />class </span><span class="default">Product </span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array();<br />    <br />    use </span><span class="default">SortStrategy</span><span class="keyword">;<br />    <br />    public function </span><span class="default">get</span><span class="keyword">() {<br />        </span><span class="comment">// do something to get the data, for this ex. I just included an array<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= array(<br />            </span><span class="default">101222 </span><span class="keyword">=&gt; array(</span><span class="string">'label' </span><span class="keyword">=&gt; </span><span class="string">'Awesome product'</span><span class="keyword">, </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">10.50</span><span class="keyword">, </span><span class="string">'date_added' </span><span class="keyword">=&gt; </span><span class="string">'2012-02-01'</span><span class="keyword">),<br />            </span><span class="default">101232 </span><span class="keyword">=&gt; array(</span><span class="string">'label' </span><span class="keyword">=&gt; </span><span class="string">'Not so awesome product'</span><span class="keyword">, </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">5.20</span><span class="keyword">, </span><span class="string">'date_added' </span><span class="keyword">=&gt; </span><span class="string">'2012-03-20'</span><span class="keyword">),<br />            </span><span class="default">101241 </span><span class="keyword">=&gt; array(</span><span class="string">'label' </span><span class="keyword">=&gt; </span><span class="string">'Pretty neat product'</span><span class="keyword">, </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">9.65</span><span class="keyword">, </span><span class="string">'date_added' </span><span class="keyword">=&gt; </span><span class="string">'2012-04-15'</span><span class="keyword">),<br />            </span><span class="default">101256 </span><span class="keyword">=&gt; array(</span><span class="string">'label' </span><span class="keyword">=&gt; </span><span class="string">'Freakishly cool product'</span><span class="keyword">, </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">12.55</span><span class="keyword">, </span><span class="string">'date_added' </span><span class="keyword">=&gt; </span><span class="string">'2012-01-11'</span><span class="keyword">),<br />            </span><span class="default">101219 </span><span class="keyword">=&gt; array(</span><span class="string">'label' </span><span class="keyword">=&gt; </span><span class="string">'Meh product'</span><span class="keyword">, </span><span class="string">'price' </span><span class="keyword">=&gt; </span><span class="default">3.69</span><span class="keyword">, </span><span class="string">'date_added' </span><span class="keyword">=&gt; </span><span class="string">'2012-06-11'</span><span class="keyword">),<br />        );<br />    }<br />    <br />    public function </span><span class="default">sort_by</span><span class="keyword">(</span><span class="default">$by </span><span class="keyword">= </span><span class="string">'price'</span><span class="keyword">, </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'asc'</span><span class="keyword">) {<br />        if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^(asc|desc)$/'</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">)) </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'asc'</span><span class="keyword">;<br />        switch (</span><span class="default">$by</span><span class="keyword">) {<br />            case </span><span class="string">'name'</span><span class="keyword">:<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field </span><span class="keyword">= </span><span class="string">'label'</span><span class="keyword">;<br />                </span><span class="default">uasort</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">, array(</span><span class="string">'Product'</span><span class="keyword">, </span><span class="string">'string_'</span><span class="keyword">.</span><span class="default">$type</span><span class="keyword">));<br />            break;<br />            case </span><span class="string">'date'</span><span class="keyword">:<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field </span><span class="keyword">= </span><span class="string">'date_added'</span><span class="keyword">;<br />                </span><span class="default">uasort</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">, array(</span><span class="string">'Product'</span><span class="keyword">, </span><span class="string">'date_'</span><span class="keyword">.</span><span class="default">$type</span><span class="keyword">));<br />            break;<br />            default:<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort_field </span><span class="keyword">= </span><span class="string">'price'</span><span class="keyword">;<br />                </span><span class="default">uasort</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">, array(</span><span class="string">'Product'</span><span class="keyword">, </span><span class="string">'num_'</span><span class="keyword">.</span><span class="default">$type</span><span class="keyword">));<br />        }<br />    }<br />}<br /><br /></span><span class="default">$product </span><span class="keyword">= new </span><span class="default">Product</span><span class="keyword">();<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">();<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">sort_by</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115125">  <div class="votes">
    <div id="Vu115125">
    <a href="/manual/vote-note.php?id=115125&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115125">
    <a href="/manual/vote-note.php?id=115125&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115125" title="63% like this...">
    12
    </div>
  </div>
  <a href="#115125" class="name">
  <strong class="user"><em>Kristof</em></strong></a><a class="genanchor" href="#115125"> &para;</a><div class="date" title="2014-05-30 11:18"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115125">
<div class="phpcode"><code><span class="html">don't forget you can create complex (embedded) traits as well<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">trait </span><span class="default">Name </span><span class="keyword">{<br />  </span><span class="comment">// ...<br /></span><span class="keyword">}<br />trait </span><span class="default">Address </span><span class="keyword">{<br />  </span><span class="comment">// ...<br /></span><span class="keyword">}<br />trait </span><span class="default">Telephone </span><span class="keyword">{<br />  </span><span class="comment">// ...<br /></span><span class="keyword">}<br />trait </span><span class="default">Contact </span><span class="keyword">{<br />  use </span><span class="default">Name</span><span class="keyword">, </span><span class="default">Address</span><span class="keyword">, </span><span class="default">Telephone</span><span class="keyword">;<br />}<br />class </span><span class="default">Customer </span><span class="keyword">{<br />  use </span><span class="default">Contact</span><span class="keyword">;<br />}<br />class </span><span class="default">Invoce </span><span class="keyword">{<br />  use </span><span class="default">Contact</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112295">  <div class="votes">
    <div id="Vu112295">
    <a href="/manual/vote-note.php?id=112295&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112295">
    <a href="/manual/vote-note.php?id=112295&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112295" title="57% like this...">
    4
    </div>
  </div>
  <a href="#112295" class="name">
  <strong class="user"><em>Oddant</em></strong></a><a class="genanchor" href="#112295"> &para;</a><div class="date" title="2013-05-29 03:10"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112295">
<div class="phpcode"><code><span class="html">I think it's obvious to notice that using 'use' followed by the traits name must be seen as just copying/pasting lines of code into the place where they are used.</span></code></div>
  </div>
 </div>
  <div class="note" id="125386">  <div class="votes">
    <div id="Vu125386">
    <a href="/manual/vote-note.php?id=125386&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125386">
    <a href="/manual/vote-note.php?id=125386&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125386" title="54% like this...">
    1
    </div>
  </div>
  <a href="#125386" class="name">
  <strong class="user"><em>guidobelluomo at gmail dot com</em></strong></a><a class="genanchor" href="#125386"> &para;</a><div class="date" title="2020-09-22 06:57"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125386">
<div class="phpcode"><code><span class="html">If you override a method which was defined by a trait, calling the parent method will also call the trait's override. Therefore if you need to derive from a class which has a trait, you can extend the class without losing the trait's functionality:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">trait </span><span class="default">ExampleTrait<br /></span><span class="keyword">{<br />    public function </span><span class="default">output</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">output</span><span class="keyword">();<br />        echo </span><span class="string">"bar&lt;br&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public function </span><span class="default">output</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"foo&lt;br&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">FooBar </span><span class="keyword">extends </span><span class="default">Foo<br /></span><span class="keyword">{<br />    use </span><span class="default">ExampleTrait</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">FooBarBaz </span><span class="keyword">extends </span><span class="default">FooBar<br /></span><span class="keyword">{<br />    use </span><span class="default">ExampleTrait</span><span class="keyword">;<br />    public function </span><span class="default">output</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">output</span><span class="keyword">();<br />        echo </span><span class="string">"baz"</span><span class="keyword">;<br />    }<br />}<br /><br />(new </span><span class="default">FooBarBaz</span><span class="keyword">())-&gt;</span><span class="default">output</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />foo<br />bar<br />baz</span></code></div>
  </div>
 </div>
  <div class="note" id="120901">  <div class="votes">
    <div id="Vu120901">
    <a href="/manual/vote-note.php?id=120901&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120901">
    <a href="/manual/vote-note.php?id=120901&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120901" title="54% like this...">
    2
    </div>
  </div>
  <a href="#120901" class="name">
  <strong class="user"><em>cody at codysnider dot com</em></strong></a><a class="genanchor" href="#120901"> &para;</a><div class="date" title="2017-03-30 03:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120901">
<div class="phpcode"><code><span class="html">/*<br />DocBlocks pertaining to the class or trait will NOT be carried over when applying the trait.<br /><br />Results trying a couple variations on classes with and without DocBlocks that use a trait with a DocBlock<br />*/<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * @Entity<br /> */<br /></span><span class="keyword">trait </span><span class="default">Foo<br /></span><span class="keyword">{<br />    protected </span><span class="default">$foo</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * @HasLifecycleCallbacks<br /> */<br /></span><span class="keyword">class </span><span class="default">Bar<br /></span><span class="keyword">{<br />    use </span><span class="default">\Foo</span><span class="keyword">;<br />    <br />    protected </span><span class="default">$bar</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">MoreBar<br /></span><span class="keyword">{<br />    use </span><span class="default">\Foo</span><span class="keyword">;<br />    <br />    protected </span><span class="default">$moreBar</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$w </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="string">'\Bar'</span><span class="keyword">);<br />echo </span><span class="default">$w</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">":\r\n"</span><span class="keyword">;<br />echo </span><span class="default">$w</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br /><br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="string">'\MoreBar'</span><span class="keyword">);<br />echo </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">":\r\n"</span><span class="keyword">;<br />echo </span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br /><br /></span><span class="default">$barObj </span><span class="keyword">= new </span><span class="default">\Bar</span><span class="keyword">();<br /></span><span class="default">$y </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="default">$barObj</span><span class="keyword">);<br />echo </span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">":\r\n"</span><span class="keyword">;<br />echo </span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br /><br />foreach(</span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">getTraits</span><span class="keyword">() as </span><span class="default">$traitObj</span><span class="keyword">) {<br />    echo </span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">" "</span><span class="keyword">;<br />    echo </span><span class="default">$traitObj</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">":\r\n"</span><span class="keyword">;<br />    echo </span><span class="default">$traitObj</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$moreBarObj </span><span class="keyword">= new </span><span class="default">\MoreBar</span><span class="keyword">();<br /></span><span class="default">$z </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="default">$moreBarObj</span><span class="keyword">);<br />echo </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">" "</span><span class="keyword">;<br />echo </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br /><br />foreach(</span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">getTraits</span><span class="keyword">() as </span><span class="default">$traitObj</span><span class="keyword">) {<br />    echo </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">" "</span><span class="keyword">;<br />    echo </span><span class="default">$traitObj</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">":\r\n"</span><span class="keyword">;<br />    echo </span><span class="default">$traitObj</span><span class="keyword">-&gt;</span><span class="default">getDocComment</span><span class="keyword">() . </span><span class="string">"\r\n"</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116895">  <div class="votes">
    <div id="Vu116895">
    <a href="/manual/vote-note.php?id=116895&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116895">
    <a href="/manual/vote-note.php?id=116895&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116895" title="53% like this...">
    2
    </div>
  </div>
  <a href="#116895" class="name">
  <strong class="user"><em>84td84 at gmail dot com</em></strong></a><a class="genanchor" href="#116895"> &para;</a><div class="date" title="2015-03-17 01:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116895">
<div class="phpcode"><code><span class="html">A note to 'Beispiel #9 Statische Variablen'. A trait can also have a static property:<br /><br />trait Counter {<br />    static $trvar=1;<br /><br />    public static function stfunc() {<br />        echo "Hello world!"<br />    }<br />}<br /><br />class C1 {<br />    use Counter;<br />}<br /><br />print "\nTRVAR: " . C1::$trvar . "\n";   //prints 1<br /><br />$obj = new C1();<br />C1::stfunc();   //prints  Hello world!<br />$obj-&gt;stfunc();   //prints Hello world!<br /><br />A static property (trvar) can only be accessed using the classname (C1).<br />But a static function (stfunc) can be accessed using the classname or the instance ($obj).</span></code></div>
  </div>
 </div>
  <div class="note" id="110195">  <div class="votes">
    <div id="Vu110195">
    <a href="/manual/vote-note.php?id=110195&amp;page=language.oop5.traits&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110195">
    <a href="/manual/vote-note.php?id=110195&amp;page=language.oop5.traits&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110195" title="53% like this...">
    3
    </div>
  </div>
  <a href="#110195" class="name">
  <strong class="user"><em>artur at webprojektant dot pl</em></strong></a><a class="genanchor" href="#110195"> &para;</a><div class="date" title="2012-09-28 06:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110195">
<div class="phpcode"><code><span class="html">Trait can not have the same name as class because it will  show: Fatal error: Cannot redeclare class</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.traits&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.traits.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="current">
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
