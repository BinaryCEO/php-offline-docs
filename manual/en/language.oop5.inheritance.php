<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Object Inheritance - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.inheritance.php">
 <link rel="shorturl" href="https://www.php.net/oop5.inheritance">
 <link rel="alternate" href="https://www.php.net/oop5.inheritance" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.visibility.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.inheritance.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.inheritance.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.inheritance.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.inheritance.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.inheritance.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.inheritance.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.inheritance.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.inheritance.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.inheritance.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.inheritance.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.inheritance.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Object Inheritance" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Object Inheritance - Manual" />
<meta name="twitter:description" content="Object Inheritance" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Object Inheritance - Manual" />
<meta itemprop="description" content="Object Inheritance" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Object Inheritance" />

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
        <a href="language.oop5.paamayim-nekudotayim.php">
          Scope Resolution Operator (::) &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.visibility.php">
          &laquo; Visibility        </a>
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
            <option value='en/language.oop5.inheritance.php' selected="selected">English</option>
            <option value='de/language.oop5.inheritance.php'>German</option>
            <option value='es/language.oop5.inheritance.php'>Spanish</option>
            <option value='fr/language.oop5.inheritance.php'>French</option>
            <option value='it/language.oop5.inheritance.php'>Italian</option>
            <option value='ja/language.oop5.inheritance.php'>Japanese</option>
            <option value='pt_BR/language.oop5.inheritance.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.inheritance.php'>Russian</option>
            <option value='tr/language.oop5.inheritance.php'>Turkish</option>
            <option value='uk/language.oop5.inheritance.php'>Ukrainian</option>
            <option value='zh/language.oop5.inheritance.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.inheritance" class="sect1">
  <h2 class="title">Object Inheritance</h2>
  <p class="para">
   Inheritance is a well-established programming principle, and PHP makes use
   of this principle in its object model. This principle will affect the way
   many classes and objects relate to one another.
  </p>
  <p class="para">
   For example, when extending a class, the subclass inherits all of the
   public and protected methods, properties and constants from the parent class.
   Unless a class overrides
   those methods, they will retain their original functionality.
  </p>
  <p class="para">
   This is useful for defining and abstracting functionality, and permits the
   implementation of additional functionality in similar objects without the
   need to reimplement all of the shared functionality.
  </p>
  <p class="para">
   Private methods of a parent class are not accessible to a child class. As a result,
   child classes may reimplement a private method themselves without regard for normal
   inheritance rules.  Prior to PHP 8.0.0, however, <code class="literal">final</code> and <code class="literal">static</code>
   restrictions were applied to private methods.  As of PHP 8.0.0, the only private method
   restriction that is enforced is <code class="literal">private final</code> constructors, as that
   is a common way to &quot;disable&quot; the constructor when using static factory methods instead.
  </p>
 <p class="para">
  The <a href="language.oop5.visibility.php" class="link">visibility</a>
  of methods, properties and constants can be relaxed, e.g. a
  <code class="literal">protected</code> method can be marked as
  <code class="literal">public</code>, but they cannot be restricted, e.g.
  marking a <code class="literal">public</code> property as <code class="literal">private</code>.
  An exception are constructors, whose visibility can be restricted, e.g.
  a <code class="literal">public</code> constructor can be marked as <code class="literal">private</code>
  in a child class.
 </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Unless autoloading is used, the classes must be defined before they are
    used. If a class extends another, then the parent class must be declared 
    before the child class structure. This rule applies to classes that inherit 
    other classes and interfaces.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is not allowed to override a read-write property with a <a href="language.oop5.properties.php#language.oop5.properties.readonly-properties" class="link">readonly property</a> or vice versa.
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $prop</span><span style="color: #007700">;<br />}<br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Illegal: read-write -&gt; readonly<br />    </span><span style="color: #007700">public readonly </span><span style="color: #0000BB">int $prop</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>

 <div class="example" id="example-308">
  <p><strong>Example #1 Inheritance Example</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">printItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">'Foo: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$string </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />    <br />    public function </span><span style="color: #0000BB">printPHP</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">'PHP is great.' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Bar </span><span style="color: #007700">extends </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">printItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #DD0000">'Bar: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$string </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= new </span><span style="color: #0000BB">Bar</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printItem</span><span style="color: #007700">(</span><span style="color: #DD0000">'baz'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Output: 'Foo: baz'<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printPHP</span><span style="color: #007700">();       </span><span style="color: #FF8000">// Output: 'PHP is great' <br /></span><span style="color: #0000BB">$bar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printItem</span><span style="color: #007700">(</span><span style="color: #DD0000">'baz'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Output: 'Bar: baz'<br /></span><span style="color: #0000BB">$bar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printPHP</span><span style="color: #007700">();       </span><span style="color: #FF8000">// Output: 'PHP is great'<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

  <div class="sect2" id="language.oop5.inheritance.internal-classes">
   <h3 class="title">Return Type Compatibility with Internal Classes</h3>
 
   <p class="para">
    Prior to PHP 8.1, most internal classes or methods didn&#039;t declare their return types,
    and any return type was allowed when extending them.
   </p>
 
   <p class="para">
    As of PHP 8.1.0, most internal methods started to &quot;tentatively&quot; declare their return type,
    in that case the return type of methods should be compatible with the parent being extended;
    otherwise, a deprecation notice is emitted.
    Note that lack of an explicit return declaration is also considered a signature mismatch,
    and thus results in the deprecation notice.
   </p>
 
   <p class="para">
    If the return type cannot be declared for an overriding method due to PHP cross-version compatibility concerns,
    a <span class="classname"><a href="class.returntypewillchange.php" class="classname">ReturnTypeWillChange</a></span> attribute can be added to silence the deprecation notice.
   </p>
 
   <div class="example" id="example-309">
    <p><strong>Example #2 The overriding method does not declare any return type</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDateTime </span><span style="color: #007700">extends </span><span style="color: #0000BB">DateTime<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #0000BB">string $modifier</span><span style="color: #007700">) { return </span><span style="color: #0000BB">false</span><span style="color: #007700">; }<br />}<br /> <br /></span><span style="color: #FF8000">// "Deprecated: Return type of MyDateTime::modify(string $modifier) should either be compatible with DateTime::modify(string $modifier): DateTime|false, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice" as of PHP 8.1.0<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
 
   <div class="example" id="example-310">
    <p><strong>Example #3 The overriding method declares a wrong return type</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDateTime </span><span style="color: #007700">extends </span><span style="color: #0000BB">DateTime<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #0000BB">string $modifier</span><span style="color: #007700">): ?</span><span style="color: #0000BB">DateTime </span><span style="color: #007700">{ return </span><span style="color: #0000BB">null</span><span style="color: #007700">; }<br />}<br /> <br /></span><span style="color: #FF8000">// "Deprecated: Return type of MyDateTime::modify(string $modifier): ?DateTime should either be compatible with DateTime::modify(string $modifier): DateTime|false, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice" as of PHP 8.1.0<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
 
   <div class="example" id="example-311">
    <p><strong>Example #4 The overriding method declares a wrong return type without a deprecation notice</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyDateTime </span><span style="color: #007700">extends </span><span style="color: #0000BB">DateTime<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">/**<br />     * @return DateTime|false<br />     */<br />    </span><span style="color: #007700">#[</span><span style="color: #0000BB">\ReturnTypeWillChange</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">modify</span><span style="color: #007700">(</span><span style="color: #0000BB">string $modifier</span><span style="color: #007700">) { return </span><span style="color: #0000BB">false</span><span style="color: #007700">; }<br />}<br /> <br /></span><span style="color: #FF8000">// No notice is triggered <br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/inheritance.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.inheritance%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.inheritance&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.inheritance.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97333">  <div class="votes">
    <div id="Vu97333">
    <a href="/manual/vote-note.php?id=97333&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97333">
    <a href="/manual/vote-note.php?id=97333&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97333" title="66% like this...">
    214
    </div>
  </div>
  <a href="#97333" class="name">
  <strong class="user"><em>jackdracona at msn dot com</em></strong></a><a class="genanchor" href="#97333"> &para;</a><div class="date" title="2010-04-14 08:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97333">
<div class="phpcode"><code><span class="html">Here is some clarification about PHP inheritance – there is a lot of bad information on the net.  PHP does support Multi-level inheritance.  (I tested it using version 5.2.9).  It does not support multiple inheritance.<br /> <br />This means that you cannot have one class extend 2 other classes (see the extends keyword).  However, you can have one class extend another, which extends another, and so on. <br /> <br />Example:<br /> <br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />        </span><span class="comment">// more code here<br /></span><span class="keyword">}<br /> <br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />        </span><span class="comment">// more code here<br /></span><span class="keyword">}<br /> <br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">B </span><span class="keyword">{<br />        </span><span class="comment">// more code here<br /></span><span class="keyword">}<br /> <br /> <br /></span><span class="default">$someObj </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();  </span><span class="comment">// no problems<br /></span><span class="default">$someOtherObj </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">(); </span><span class="comment">// no problems<br /></span><span class="default">$lastObj </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">(); </span><span class="comment">// still no problems<br /> <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121211">  <div class="votes">
    <div id="Vu121211">
    <a href="/manual/vote-note.php?id=121211&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121211">
    <a href="/manual/vote-note.php?id=121211&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121211" title="63% like this...">
    104
    </div>
  </div>
  <a href="#121211" class="name">
  <strong class="user"><em>Mohammad Istanbouly</em></strong></a><a class="genanchor" href="#121211"> &para;</a><div class="date" title="2017-06-11 10:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121211">
<div class="phpcode"><code><span class="html">I think the best way for beginners to understand inheritance is through a real example so here is a simple example I can gave to you <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Person<br /></span><span class="keyword">{<br />    public </span><span class="default">$name</span><span class="keyword">;<br />    protected </span><span class="default">$age</span><span class="keyword">;<br />    private </span><span class="default">$phone</span><span class="keyword">;<br /><br />    public function </span><span class="default">talk</span><span class="keyword">(){<br />        </span><span class="comment">//Do stuff here<br />    </span><span class="keyword">}<br /><br />    protected function </span><span class="default">walk</span><span class="keyword">(){<br />        </span><span class="comment">//Do stuff here<br />    </span><span class="keyword">}<br /><br />    private function </span><span class="default">swim</span><span class="keyword">(){<br />        </span><span class="comment">//Do stuff here<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">Tom </span><span class="keyword">extends </span><span class="default">Person<br /></span><span class="keyword">{<br />    </span><span class="comment">/*Since Tom class extends Person class this means <br />        that class Tom is a child class and class person is <br />        the parent class and child class will inherit all public <br />        and protected members(properties and methods) from<br />        the parent class*/<br /><br />     /*So class Tom will have these properties and methods*/<br /><br />     //public $name;<br />     //protected $age;<br />     //public function talk(){}<br />     //protected function walk(){}<br /><br />     //but it will not inherit the private members <br />     //this is all what Object inheritance means<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117570">  <div class="votes">
    <div id="Vu117570">
    <a href="/manual/vote-note.php?id=117570&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117570">
    <a href="/manual/vote-note.php?id=117570&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117570" title="54% like this...">
    20
    </div>
  </div>
  <a href="#117570" class="name">
  <strong class="user"><em>akashwebdev at gmail dot com</em></strong></a><a class="genanchor" href="#117570"> &para;</a><div class="date" title="2015-07-01 05:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117570">
<div class="phpcode"><code><span class="html">The Idea that multiple inheritence is not supported is correct but with tratits this can be reviewed.<br /><br />for e.g.<br /> <br /><span class="default">&lt;?php<br /></span><span class="keyword">trait  </span><span class="default">custom<br /></span><span class="keyword">{<br />     public function </span><span class="default">hello</span><span class="keyword">()<br />     {<br />          echo </span><span class="string">"hello"</span><span class="keyword">;<br />     }<br />}<br /><br />trait </span><span class="default">custom2<br /></span><span class="keyword">{<br />       public function </span><span class="default">hello</span><span class="keyword">()<br />       {<br />            echo </span><span class="string">"hello2"</span><span class="keyword">;<br />       }<br />}<br /><br />class </span><span class="default">inheritsCustom<br /></span><span class="keyword">{<br />        use </span><span class="default">custom</span><span class="keyword">, </span><span class="default">custom2<br />        </span><span class="keyword">{<br />              </span><span class="default">custom2</span><span class="keyword">::</span><span class="default">hello </span><span class="keyword">insteadof </span><span class="default">custom</span><span class="keyword">;<br />        }<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">inheritsCustom</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">hello</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94288">  <div class="votes">
    <div id="Vu94288">
    <a href="/manual/vote-note.php?id=94288&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94288">
    <a href="/manual/vote-note.php?id=94288&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94288" title="54% like this...">
    15
    </div>
  </div>
  <a href="#94288" class="name">
  <strong class="user"><em>jarrod at squarecrow dot com</em></strong></a><a class="genanchor" href="#94288"> &para;</a><div class="date" title="2009-10-27 06:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94288">
<div class="phpcode"><code><span class="html">You can force a class to be strictly an inheritable class by using the "abstract" keyword. When you define a class with abstract, any attempt to instantiate a separate instance of it will result in a fatal error. This is useful for situations like a base class where it would be inherited by multiple child classes yet you want to restrict the ability to instantiate it by itself.<br /><br />Example........<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">abstract class </span><span class="default">Cheese<br /></span><span class="keyword">{<br />      </span><span class="comment">//can ONLY be inherited by another class<br /></span><span class="keyword">}<br /><br />class </span><span class="default">Cheddar </span><span class="keyword">extends </span><span class="default">Cheese<br /></span><span class="keyword">{<br />}<br /><br /></span><span class="default">$dinner </span><span class="keyword">= new </span><span class="default">Cheese</span><span class="keyword">; </span><span class="comment">//fatal error<br /></span><span class="default">$lunch </span><span class="keyword">= new </span><span class="default">Cheddar</span><span class="keyword">; </span><span class="comment">//works!<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100005">  <div class="votes">
    <div id="Vu100005">
    <a href="/manual/vote-note.php?id=100005&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100005">
    <a href="/manual/vote-note.php?id=100005&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100005" title="52% like this...">
    16
    </div>
  </div>
  <a href="#100005" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#100005"> &para;</a><div class="date" title="2010-09-19 09:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100005">
<div class="phpcode"><code><span class="html">I was recently extending a PEAR class when I encountered a situation where I wanted to call a constructor two levels up the class hierarchy, ignoring the immediate parent.  In such a case, you need to explicitly reference the class name using the :: operator.<br /><br />Fortunately, just like using the 'parent' keyword PHP correctly recognizes that you are calling the function from a protected context inside the object's class hierarchy.<br /><br />E.g:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo<br /></span><span class="keyword">{<br />  public function </span><span class="default">something</span><span class="keyword">()<br />  {<br />    echo </span><span class="default">__CLASS__</span><span class="keyword">; </span><span class="comment">// foo<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />  }<br />}<br /><br />class </span><span class="default">foo_bar </span><span class="keyword">extends </span><span class="default">foo<br /></span><span class="keyword">{<br />  public function </span><span class="default">something</span><span class="keyword">()<br />  {<br />    echo </span><span class="default">__CLASS__</span><span class="keyword">; </span><span class="comment">// foo_bar<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />  }<br />}<br /><br />class </span><span class="default">foo_bar_baz </span><span class="keyword">extends </span><span class="default">foo_bar<br /></span><span class="keyword">{<br />  public function </span><span class="default">something</span><span class="keyword">()<br />  {<br />    echo </span><span class="default">__CLASS__</span><span class="keyword">; </span><span class="comment">// foo_bar_baz<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />  }<br /><br />  public function </span><span class="default">call</span><span class="keyword">()<br />  {<br />    echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">something</span><span class="keyword">(); </span><span class="comment">// self<br />    </span><span class="keyword">echo </span><span class="default">parent</span><span class="keyword">::</span><span class="default">something</span><span class="keyword">(); </span><span class="comment">// parent<br />    </span><span class="keyword">echo </span><span class="default">foo</span><span class="keyword">::</span><span class="default">something</span><span class="keyword">(); </span><span class="comment">// grandparent<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">error_reporting</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">foo_bar_baz</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">();<br /><br /></span><span class="comment">// Output similar to:<br />// foo_bar_baz<br />// object(foo_bar_baz)[1]<br />// foo_bar<br />// object(foo_bar_baz)[1]<br />// foo<br />// object(foo_bar_baz)[1]<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129990">  <div class="votes">
    <div id="Vu129990">
    <a href="/manual/vote-note.php?id=129990&amp;page=language.oop5.inheritance&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129990">
    <a href="/manual/vote-note.php?id=129990&amp;page=language.oop5.inheritance&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129990" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129990" class="name">
  <strong class="user"><em>ignacio at inek dot com dot ar</em></strong></a><a class="genanchor" href="#129990"> &para;</a><div class="date" title="2025-01-21 03:36"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129990">
<div class="phpcode"><code><span class="html">In case you have a public readonly property in a class you need to extend, adding other properties, this can be a way to do it:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(<br />        public readonly </span><span class="default">int $prop<br />    </span><span class="keyword">) {}<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(<br />        </span><span class="default">int $prop</span><span class="keyword">,<br />        public readonly </span><span class="default">int $prop2<br />    </span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$prop</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.inheritance&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.inheritance.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
