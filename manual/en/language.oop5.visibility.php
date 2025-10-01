<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Visibility - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.visibility.php">
 <link rel="shorturl" href="https://www.php.net/oop5.visibility">
 <link rel="alternate" href="https://www.php.net/oop5.visibility" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.decon.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.inheritance.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.visibility.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.visibility.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.visibility.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.visibility.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.visibility.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.visibility.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.visibility.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.visibility.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.visibility.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.visibility.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.visibility.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Visibility" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Visibility - Manual" />
<meta name="twitter:description" content="Visibility" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Visibility - Manual" />
<meta itemprop="description" content="Visibility" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Visibility" />

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
        <a href="language.oop5.inheritance.php">
          Object Inheritance &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.decon.php">
          &laquo; Constructors and Destructors        </a>
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
            <option value='en/language.oop5.visibility.php' selected="selected">English</option>
            <option value='de/language.oop5.visibility.php'>German</option>
            <option value='es/language.oop5.visibility.php'>Spanish</option>
            <option value='fr/language.oop5.visibility.php'>French</option>
            <option value='it/language.oop5.visibility.php'>Italian</option>
            <option value='ja/language.oop5.visibility.php'>Japanese</option>
            <option value='pt_BR/language.oop5.visibility.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.visibility.php'>Russian</option>
            <option value='tr/language.oop5.visibility.php'>Turkish</option>
            <option value='uk/language.oop5.visibility.php'>Ukrainian</option>
            <option value='zh/language.oop5.visibility.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.visibility" class="sect1">
  <h2 class="title">Visibility</h2>
  <p class="para">
   The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing
   the declaration with the keywords <code class="literal">public</code>,
   <code class="literal">protected</code> or
   <code class="literal">private</code>. Class members declared public can be
   accessed everywhere. Members declared protected can be accessed
   only within the class itself and by inheriting and parent
   classes. Members declared as private may only be accessed by the
   class that defines the member.
  </p>

  <div class="sect2" id="language.oop5.visibility-members">
   <h3 class="title">Property Visibility</h3>
   <p class="para">
    Class properties may be defined as public, private, or
    protected. Properties declared without any explicit visibility
    keyword are defined as public.
   </p>
   <div class="example" id="example-302">
    <p><strong>Example #1 Property declaration</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br /> * Define MyClass<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$public </span><span style="color: #007700">= </span><span style="color: #DD0000">'Public'</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$protected </span><span style="color: #007700">= </span><span style="color: #DD0000">'Protected'</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$private </span><span style="color: #007700">= </span><span style="color: #DD0000">'Private'</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">printHello</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Shows Public, Protected and Private<br /><br /><br />/**<br /> * Define MyClass2<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass2 </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// We can redeclare the public and protected properties, but not private<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">$public </span><span style="color: #007700">= </span><span style="color: #DD0000">'Public2'</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$protected </span><span style="color: #007700">= </span><span style="color: #DD0000">'Protected2'</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">printHello</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">public</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">protected</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">private</span><span style="color: #007700">; </span><span style="color: #FF8000">// Undefined<br /></span><span style="color: #0000BB">$obj2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">printHello</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Shows Public2, Protected2, Undefined<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="sect3" id="language.oop5.visibility-members-aviz">
    <h4 class="title">Asymmetric Property Visibility</h4>
    <p class="simpara">
     As of PHP 8.4, properties may also have their
     visibility set asymmetrically, with a different scope for
     reading (<code class="literal">get</code>) and writing (<code class="literal">set</code>).
     Specifically, the <code class="literal">set</code> visibility may be
     specified separately, provided it is not more permissive than the
     default visibility.
    </p>
    <div class="example" id="example-303">
     <p><strong>Example #2 Asymmetric Property visibility</strong></p>
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Book<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(<br />        public private(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">string $title</span><span style="color: #007700">,<br />        public protected(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">string $author</span><span style="color: #007700">,<br />        protected private(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">int $pubYear</span><span style="color: #007700">,<br />    ) {}<br />}<br /><br />class </span><span style="color: #0000BB">SpecialBook </span><span style="color: #007700">extends </span><span style="color: #0000BB">Book<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">string $author</span><span style="color: #007700">, </span><span style="color: #0000BB">int $year</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">author </span><span style="color: #007700">= </span><span style="color: #0000BB">$author</span><span style="color: #007700">; </span><span style="color: #FF8000">// OK<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pubYear </span><span style="color: #007700">= </span><span style="color: #0000BB">$year</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= new </span><span style="color: #0000BB">Book</span><span style="color: #007700">(</span><span style="color: #DD0000">'How to PHP'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Peter H. Peterson'</span><span style="color: #007700">, </span><span style="color: #0000BB">2024</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">author</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pubYear</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /><br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title </span><span style="color: #007700">= </span><span style="color: #DD0000">'How not to PHP'</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">author </span><span style="color: #007700">= </span><span style="color: #DD0000">'Pedro H. Peterson'</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$b</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pubYear </span><span style="color: #007700">= </span><span style="color: #0000BB">2023</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <p class="para">There are a few caveats regarding asymmetric visibility:</p>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Only typed properties may have a separate <code class="literal">set</code> visibility.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       The <code class="literal">set</code> visibility must be the same
       as <code class="literal">get</code> or more restrictive. That is,
       <code class="code">public protected(set)</code> and <code class="code">protected protected(set)</code>
       are allowed, but <code class="code">protected public(set)</code> will cause a syntax error.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       If a property is <code class="literal">public</code>, then the main visibility may be
       omitted.  That is, <code class="code">public private(set)</code> and <code class="code">private(set)</code>
       will have the same result.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       A property with <code class="literal">private(set)</code> visibility
       is automatically <code class="literal">final</code>, and may not be redeclared in a child class.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Obtaining a reference to a property follows <code class="literal">set</code> visibility, not <code class="literal">get</code>.
       That is because a reference may be used to modify the property value.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Similarly, trying to write to an array property involves both a <code class="literal">get</code> and
       <code class="literal">set</code> operation internally, and therefore will follow the <code class="literal">set</code>
       visibility, as that is always the more restrictive.
      </span>
     </li>
    </ul>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Spaces are not allowed in the set-visibility declaration.
      <code class="literal">private(set)</code> is correct.
      <code class="literal">private( set )</code> is not correct and will result in a parse error.
     </span>
    </p></blockquote>
    <p class="simpara">
     When a class extends another, the child class may redefine
     any property that is not <code class="literal">final</code>.  When doing so,
     it may widen either the main visibility or the <code class="literal">set</code>
     visibility, provided that the new visibility is the same or wider
     than the parent class.  However, be aware that if a <code class="literal">private</code>
     property is overridden, it does not actually change the parent&#039;s property
     but creates a new property with a different internal name.
    </p>
    <div class="example" id="example-304">
     <p><strong>Example #3 Asymmetric Property inheritance</strong></p>
     <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Book<br /></span><span style="color: #007700">{<br />    protected </span><span style="color: #0000BB">string $title</span><span style="color: #007700">;<br />    public protected(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">string $author</span><span style="color: #007700">;<br />    protected private(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">int $pubYear</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">SpecialBook </span><span style="color: #007700">extends </span><span style="color: #0000BB">Book<br /></span><span style="color: #007700">{<br />    public protected(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">$title</span><span style="color: #007700">; </span><span style="color: #FF8000">// OK, as reading is wider and writing the same.<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $author</span><span style="color: #007700">; </span><span style="color: #FF8000">// OK, as reading is the same and writing is wider.<br />    </span><span style="color: #007700">public protected(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">int $pubYear</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error. private(set) properties are final.<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>
  </div>

  <div class="sect2" id="language.oop5.visiblity-methods">
   <h3 class="title">Method Visibility</h3>
   <p class="para">
    Class methods may be defined as public, private, or
    protected. Methods declared without any explicit visibility
    keyword are defined as public.
   </p>
   <div class="example" id="example-305">
    <p><strong>Example #4 Method Declaration</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br /> * Define MyClass<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Declare a public constructor<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() { }<br /><br />    </span><span style="color: #FF8000">// Declare a public method<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">() { }<br /><br />    </span><span style="color: #FF8000">// Declare a protected method<br />    </span><span style="color: #007700">protected function </span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">() { }<br /><br />    </span><span style="color: #FF8000">// Declare a private method<br />    </span><span style="color: #007700">private function </span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">() { }<br /><br />    </span><span style="color: #FF8000">// This is public<br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">Foo</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">();<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$myclass </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Works<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Public, Protected and Private work<br /><br /><br />/**<br /> * Define MyClass2<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass2 </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// This is public<br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">Foo2</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyProtected</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPrivate</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Fatal Error<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$myclass2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MyPublic</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Works<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Foo2</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Public and Protected work, not Private<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Bar <br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testPublic</span><span style="color: #007700">();<br />    }<br /><br />    public function </span><span style="color: #0000BB">testPublic</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"Bar::testPublic\n"</span><span style="color: #007700">;<br />    }<br />    <br />    private function </span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"Bar::testPrivate\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">extends </span><span style="color: #0000BB">Bar <br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">testPublic</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"Foo::testPublic\n"</span><span style="color: #007700">;<br />    }<br />    <br />    private function </span><span style="color: #0000BB">testPrivate</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">"Foo::testPrivate\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$myFoo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$myFoo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">test</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Bar::testPrivate <br />                // Foo::testPublic<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.visiblity-constants">
   <h3 class="title">Constant Visibility</h3>
   <p class="para">
    As of PHP 7.1.0, class constants may be defined as public, private, or
    protected. Constants declared without any explicit visibility
    keyword are defined as public.
   </p>
   <div class="example" id="example-306">
    <p><strong>Example #5 Constant Declaration as of PHP 7.1.0</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br /> * Define MyClass<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Declare a public constant<br />    </span><span style="color: #007700">public const </span><span style="color: #0000BB">MY_PUBLIC </span><span style="color: #007700">= </span><span style="color: #DD0000">'public'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Declare a protected constant<br />    </span><span style="color: #007700">protected const </span><span style="color: #0000BB">MY_PROTECTED </span><span style="color: #007700">= </span><span style="color: #DD0000">'protected'</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Declare a private constant<br />    </span><span style="color: #007700">private const </span><span style="color: #0000BB">MY_PRIVATE </span><span style="color: #007700">= </span><span style="color: #DD0000">'private'</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$myclass </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">MyClass</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br /></span><span style="color: #0000BB">$myclass</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Public, Protected and Private work<br /><br /><br />/**<br /> * Define MyClass2<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass2 </span><span style="color: #007700">extends </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// This is public<br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">foo2</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PROTECTED</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PRIVATE</span><span style="color: #007700">; </span><span style="color: #FF8000">// Fatal Error<br />    </span><span style="color: #007700">}<br />}<br /><br /></span><span style="color: #0000BB">$myclass2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">MyClass2</span><span style="color: #007700">::</span><span style="color: #0000BB">MY_PUBLIC</span><span style="color: #007700">; </span><span style="color: #FF8000">// Works<br /></span><span style="color: #0000BB">$myclass2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo2</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Public and Protected work, not Private<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect2" id="language.oop5.visibility-other-objects">
   <h3 class="title">Visibility from other objects</h3>
   <p class="para">
    Objects of the same type will have access to each others private and
    protected members even though they are not the same instances. This is
    because the implementation specific details are already known when inside
    those objects.
   </p>
   <div class="example" id="example-307">
    <p><strong>Example #6 Accessing private members of the same object type</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br />    }<br /><br />    private function </span><span style="color: #0000BB">bar</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">'Accessed the private method.'</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">baz</span><span style="color: #007700">(</span><span style="color: #0000BB">Test $other</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #FF8000">// We can change the private property:<br />        </span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">// We can also call the private method:<br />        </span><span style="color: #0000BB">$other</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">();<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$test </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$test</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baz</span><span style="color: #007700">(new </span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #DD0000">'other'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
string(5) &quot;hello&quot;
Accessed the private method.
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
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/visibility.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.visibility%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.visibility&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.visibility.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117563">  <div class="votes">
    <div id="Vu117563">
    <a href="/manual/vote-note.php?id=117563&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117563">
    <a href="/manual/vote-note.php?id=117563&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117563" title="70% like this...">
    63
    </div>
  </div>
  <a href="#117563" class="name">
  <strong class="user"><em>pgl at yoyo dot org</em></strong></a><a class="genanchor" href="#117563"> &para;</a><div class="date" title="2015-06-30 11:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117563">
<div class="phpcode"><code><span class="html">Just a quick note that it's possible to declare visibility for multiple properties at the same time, by separating them by commas.<br /><br />eg:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">a<br /></span><span class="keyword">{<br />    protected </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">;<br /><br />    public </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">;<br /><br />    private </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75426">  <div class="votes">
    <div id="Vu75426">
    <a href="/manual/vote-note.php?id=75426&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75426">
    <a href="/manual/vote-note.php?id=75426&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75426" title="61% like this...">
    10
    </div>
  </div>
  <a href="#75426" class="name">
  <strong class="user"><em>Joshua Watt</em></strong></a><a class="genanchor" href="#75426"> &para;</a><div class="date" title="2007-05-29 12:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75426">
<div class="phpcode"><code><span class="html">I couldn't find this documented anywhere, but you can access protected and private member varaibles in different instance of the same class, just as you would expect<br /><br />i.e.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    protected </span><span class="default">$prot</span><span class="keyword">;<br />    private </span><span class="default">$priv</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prot </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">priv </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">print_other</span><span class="keyword">(</span><span class="default">A $other</span><span class="keyword">)<br />    {<br />        echo </span><span class="default">$other</span><span class="keyword">-&gt;</span><span class="default">prot</span><span class="keyword">;<br />        echo </span><span class="default">$other</span><span class="keyword">-&gt;</span><span class="default">priv</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A<br /></span><span class="keyword">{<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">(</span><span class="string">"a_protected"</span><span class="keyword">, </span><span class="string">"a_private"</span><span class="keyword">);<br /></span><span class="default">$other_a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">(</span><span class="string">"other_a_protected"</span><span class="keyword">, </span><span class="string">"other_a_private"</span><span class="keyword">);<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">(</span><span class="string">"b_protected"</span><span class="keyword">, </span><span class="string">"ba_private"</span><span class="keyword">);<br /><br /></span><span class="default">$other_a</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//echoes a_protected and a_private<br /></span><span class="default">$other_a</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">); </span><span class="comment">//echoes b_protected and ba_private<br /><br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">print_other</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//echoes a_protected and a_private<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109110">  <div class="votes">
    <div id="Vu109110">
    <a href="/manual/vote-note.php?id=109110&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109110">
    <a href="/manual/vote-note.php?id=109110&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109110" title="59% like this...">
    10
    </div>
  </div>
  <a href="#109110" class="name">
  <strong class="user"><em>jc dot flash at gmail dot com</em></strong></a><a class="genanchor" href="#109110"> &para;</a><div class="date" title="2012-06-21 02:31"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109110">
<div class="phpcode"><code><span class="html">if not overwritten, self::$foo in a subclass actually refers to parent's self::$foo <br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">one<br /></span><span class="keyword">{<br />    protected static </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">"bar"</span><span class="keyword">;<br />    public function </span><span class="default">change_foo</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">two </span><span class="keyword">extends </span><span class="default">one<br /></span><span class="keyword">{<br />    public function </span><span class="default">tell_me</span><span class="keyword">()<br />    {<br />        echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">$foo</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$first </span><span class="keyword">= new </span><span class="default">one</span><span class="keyword">;<br /></span><span class="default">$second </span><span class="keyword">= new </span><span class="default">two</span><span class="keyword">;<br /><br /></span><span class="default">$second</span><span class="keyword">-&gt;</span><span class="default">tell_me</span><span class="keyword">(); </span><span class="comment">// bar<br /></span><span class="default">$first</span><span class="keyword">-&gt;</span><span class="default">change_foo</span><span class="keyword">(</span><span class="string">"restaurant"</span><span class="keyword">);<br /></span><span class="default">$second</span><span class="keyword">-&gt;</span><span class="default">tell_me</span><span class="keyword">(); </span><span class="comment">// restaurant<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120150">  <div class="votes">
    <div id="Vu120150">
    <a href="/manual/vote-note.php?id=120150&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120150">
    <a href="/manual/vote-note.php?id=120150&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120150" title="56% like this...">
    6
    </div>
  </div>
  <a href="#120150" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#120150"> &para;</a><div class="date" title="2016-11-11 03:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120150">
<div class="phpcode"><code><span class="html">&gt; Members declared protected can be accessed only within <br />&gt; the class itself and by inherited classes. Members declared <br />&gt; as private may only be accessed by the class that defines <br />&gt; the member.<br /><br />This is not strictly true. Code outside the object can get and set private and protected members:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Sealed </span><span class="keyword">{ private </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">; }<br /><br /></span><span class="default">$sealed </span><span class="keyword">= new </span><span class="default">Sealed</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">); </span><span class="comment">// private $value =&gt; string(3) "foo"<br /><br /></span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">\Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />    function () use (</span><span class="default">$sealed</span><span class="keyword">) { </span><span class="default">$sealed</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="string">'BAZ'</span><span class="keyword">; },<br />    </span><span class="default">null</span><span class="keyword">,<br />    </span><span class="default">$sealed<br /></span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">); </span><span class="comment">// private $value =&gt; string(3) "BAZ"<br /><br /></span><span class="default">?&gt;<br /></span><br />The magic lay in \Closure::bind, which allows an anonymous function to bind to a particular class scope. The documentation on \Closure::bind says:<br /><br />&gt; If an object is given, the type of the object will be used<br />&gt; instead. This determines the visibility of protected and<br />&gt; private methods of the bound object.<br /><br />So, effectively, we're adding a run-time setter to $sealed, then calling that setter. This can be elaborated to generic functions that can force set and force get object members:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">force_set</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">\Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />        function () use (</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$object</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">;<br />        },<br />        </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="default">$object<br />    </span><span class="keyword">));<br />}<br /><br />function </span><span class="default">force_get</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">) {<br />    return </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">\Closure</span><span class="keyword">::</span><span class="default">bind</span><span class="keyword">(<br />        function () use (</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">) {<br />            return </span><span class="default">$object</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">};<br />        },<br />        </span><span class="default">null</span><span class="keyword">,<br />        </span><span class="default">$object<br />    </span><span class="keyword">));<br />}<br /><br /></span><span class="default">force_set</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">, </span><span class="string">'quux'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">force_get</span><span class="keyword">(</span><span class="default">$sealed</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">)); </span><span class="comment">// 'quux'<br /><br /></span><span class="default">?&gt;<br /></span><br />You should probably not rely on this ability for production quality code, but having this ability for debugging and testing is handy.</span></code></div>
  </div>
 </div>
  <div class="note" id="128401">  <div class="votes">
    <div id="Vu128401">
    <a href="/manual/vote-note.php?id=128401&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128401">
    <a href="/manual/vote-note.php?id=128401&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128401" title="55% like this...">
    2
    </div>
  </div>
  <a href="#128401" class="name">
  <strong class="user"><em>alperenberatdurmus at gmail dot com</em></strong></a><a class="genanchor" href="#128401"> &para;</a><div class="date" title="2023-04-17 08:57"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128401">
<div class="phpcode"><code><span class="html">Dynamic properties are "public".<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />    public function </span><span class="default">setProperty</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dynamicProperty </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">setProperty</span><span class="keyword">(</span><span class="string">'Hello World'</span><span class="keyword">);<br />echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">dynamicProperty</span><span class="keyword">; </span><span class="comment">// Outputs "Hello World"<br /></span><span class="default">?&gt;<br /></span><br />This usage is the same as well:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />}<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">dynamicProperty </span><span class="keyword">= </span><span class="string">'Hello World'</span><span class="keyword">;<br />echo </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">dynamicProperty</span><span class="keyword">; </span><span class="comment">// Outputs "Hello World"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126362">  <div class="votes">
    <div id="Vu126362">
    <a href="/manual/vote-note.php?id=126362&amp;page=language.oop5.visibility&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126362">
    <a href="/manual/vote-note.php?id=126362&amp;page=language.oop5.visibility&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126362" title="55% like this...">
    2
    </div>
  </div>
  <a href="#126362" class="name">
  <strong class="user"><em>kostya at eltexsoft dot com</em></strong></a><a class="genanchor" href="#126362"> &para;</a><div class="date" title="2021-08-23 10:05"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126362">
<div class="phpcode"><code><span class="html">I see we can redeclare private properties into child class <br /><span class="default">&lt;?php   <br /> </span><span class="keyword">class </span><span class="default">A</span><span class="keyword">{<br />        private </span><span class="default">int $private_prop </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />        protected </span><span class="default">int $protected_prop </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br />    }<br /><br />    class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A</span><span class="keyword">{<br />        private </span><span class="default">int $private_prop </span><span class="keyword">= </span><span class="default">7</span><span class="keyword">; </span><span class="comment">// we can redeclare private property!!!<br />        </span><span class="keyword">public function </span><span class="default">printAll</span><span class="keyword">() {<br />            echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">private_prop</span><span class="keyword">;<br />            echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">protected_prop</span><span class="keyword">;<br />    }<br />    }<br /><br />    </span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br />    </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">printAll</span><span class="keyword">(); </span><span class="comment">// show 78<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.visibility&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.visibility.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
