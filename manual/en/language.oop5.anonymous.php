<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Anonymous classes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.anonymous.php">
 <link rel="shorturl" href="https://www.php.net/oop5.anonymous">
 <link rel="alternate" href="https://www.php.net/oop5.anonymous" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.traits.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.overloading.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.anonymous.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.anonymous.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.anonymous.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.anonymous.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.anonymous.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.anonymous.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.anonymous.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.anonymous.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.anonymous.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.anonymous.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.anonymous.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Anonymous classes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Anonymous classes - Manual" />
<meta name="twitter:description" content="Anonymous classes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Anonymous classes - Manual" />
<meta itemprop="description" content="Anonymous classes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Anonymous classes" />

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
        <a href="language.oop5.overloading.php">
          Overloading &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.traits.php">
          &laquo; Traits        </a>
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
            <option value='en/language.oop5.anonymous.php' selected="selected">English</option>
            <option value='de/language.oop5.anonymous.php'>German</option>
            <option value='es/language.oop5.anonymous.php'>Spanish</option>
            <option value='fr/language.oop5.anonymous.php'>French</option>
            <option value='it/language.oop5.anonymous.php'>Italian</option>
            <option value='ja/language.oop5.anonymous.php'>Japanese</option>
            <option value='pt_BR/language.oop5.anonymous.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.anonymous.php'>Russian</option>
            <option value='tr/language.oop5.anonymous.php'>Turkish</option>
            <option value='uk/language.oop5.anonymous.php'>Ukrainian</option>
            <option value='zh/language.oop5.anonymous.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.anonymous" class="sect1">
 <h2 class="title">Anonymous classes</h2>

 <p class="para">
  Anonymous classes are useful when simple, one-off objects need to be created.
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Using an explicit class<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Logger<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">$msg</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$util</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(new </span><span style="color: #0000BB">Logger</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Using an anonymous class<br /></span><span style="color: #0000BB">$util</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(new class {<br />    public function </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">$msg</span><span style="color: #007700">;<br />    }<br />});</span></span></code></div>
  </div>

 </div>

 <p class="para">
  They can pass arguments through to their constructors, extend other classes,
  implement interfaces, and use traits just like a normal class can:
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SomeClass </span><span style="color: #007700">{}<br />interface </span><span style="color: #0000BB">SomeInterface </span><span style="color: #007700">{}<br />trait </span><span style="color: #0000BB">SomeTrait </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new class(</span><span style="color: #0000BB">10</span><span style="color: #007700">) extends </span><span style="color: #0000BB">SomeClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">SomeInterface </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$num</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$num</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num </span><span style="color: #007700">= </span><span style="color: #0000BB">$num</span><span style="color: #007700">;<br />    }<br /><br />    use </span><span style="color: #0000BB">SomeTrait</span><span style="color: #007700">;<br />});</span></span></code></div>
  </div>

  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
object(class@anonymous)#1 (1) {
  [&quot;Command line code0x104c5b612&quot;:&quot;class@anonymous&quot;:private]=&gt;
  int(10)
}
</pre></div>
  </div>
 </div>

 <p class="para">
  Nesting an anonymous class within another class does not give it access to
  any private or protected methods or properties of that outer class. In order
  to use the outer class&#039; protected properties or methods, the anonymous class
  can extend the outer class. To use the private properties of
  the outer class in the anonymous class, they must be passed through its
  constructor:
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Outer<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$prop </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$prop2 </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />    protected function </span><span style="color: #0000BB">func1</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">func2</span><span style="color: #007700">()<br />    {<br />        return new class(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop</span><span style="color: #007700">) extends </span><span style="color: #0000BB">Outer </span><span style="color: #007700">{<br />            private </span><span style="color: #0000BB">$prop3</span><span style="color: #007700">;<br /><br />            public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">)<br />            {<br />                </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop3 </span><span style="color: #007700">= </span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br />            }<br /><br />            public function </span><span style="color: #0000BB">func3</span><span style="color: #007700">()<br />            {<br />                return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop2 </span><span style="color: #007700">+ </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prop3 </span><span style="color: #007700">+ </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">func1</span><span style="color: #007700">();<br />            }<br />        };<br />    }<br />}<br /><br />echo (new </span><span style="color: #0000BB">Outer</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">func2</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">func3</span><span style="color: #007700">();</span></span></code></div>
  </div>

  <p class="para">The above example will output:</p>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
6
</pre></div>
  </div>
 </div>

 <p class="para">
  All objects created by the same anonymous class declaration are instances of
  that very class.
 </p>

 <div class="informalexample">
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">anonymous_class</span><span style="color: #007700">()<br />{<br />    return new class {};<br />}<br /><br />if (</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">anonymous_class</span><span style="color: #007700">()) === </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">anonymous_class</span><span style="color: #007700">())) {<br />    echo </span><span style="color: #DD0000">'same class'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'different class'</span><span style="color: #007700">;<br />}</span></span></code></div>
 </div>

 <p class="para">The above example will output:</p>
 <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
same class
</pre></div>
  </div>
 </div>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Note that anonymous classes are assigned a name by the engine, as
   demonstrated in the following example. This name has to be regarded an
   implementation detail, which should not be relied upon.
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(new class {});</span></span></code></div>
  </div>

  <p class="para">The above example will output
something similar to:</p>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
class@anonymous/in/oNi1A0x7f8636ad2021
</pre></div>
   </div>
  </div>
 </p></blockquote>

 <div class="sect2" id="language.oop5.anonymous.readonly">
  <h3 class="title">Readonly anonymous classes</h3>
  <p class="simpara">
   As of PHP 8.3.0, the <code class="literal">readonly</code> modifier can
   be applied to anonymous classes.
  </p>
  <div class="example" id="language.oop5.anonymous.readonly.example">
   <p><strong>Example #1 Defining a readonly anonymous class</strong></p>
   <div class="example-contents">
    <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Using an anonymous class<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(new readonly class(</span><span style="color: #DD0000">'[DEBUG]'</span><span style="color: #007700">) {<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(private </span><span style="color: #0000BB">string $prefix</span><span style="color: #007700">)<br />    {<br />    }<br /><br />    public function </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">)<br />    {<br />        echo </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prefix </span><span style="color: #007700">. </span><span style="color: #DD0000">' ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$msg</span><span style="color: #007700">;<br />    }<br />});</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/anonymous.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.anonymous%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.anonymous&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.anonymous.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119055">  <div class="votes">
    <div id="Vu119055">
    <a href="/manual/vote-note.php?id=119055&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119055">
    <a href="/manual/vote-note.php?id=119055&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119055" title="68% like this...">
    50
    </div>
  </div>
  <a href="#119055" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119055"> &para;</a><div class="date" title="2016-03-25 06:52"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119055">
<div class="phpcode"><code><span class="html">Below three examples describe anonymous class with very simple and basic but quite understandable example<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// First way - anonymous class assigned directly to variable<br /></span><span class="default">$ano_class_obj </span><span class="keyword">= new class{<br />    public </span><span class="default">$prop1 </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br />    public </span><span class="default">$prop2 </span><span class="keyword">= </span><span class="default">754</span><span class="keyword">;<br />    const </span><span class="default">SETT </span><span class="keyword">= </span><span class="string">'some config'</span><span class="keyword">;<br /><br />    public function </span><span class="default">getValue</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// do some operation<br />        </span><span class="keyword">return </span><span class="string">'some returned value'</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// do some operation<br />        </span><span class="keyword">return </span><span class="string">'returned value is '</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">;<br />    }<br />};<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ano_class_obj</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj</span><span class="keyword">-&gt;</span><span class="default">prop1</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj</span><span class="keyword">-&gt;</span><span class="default">prop2</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj</span><span class="keyword">::</span><span class="default">SETT</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">();<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj</span><span class="keyword">-&gt;</span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="string">'OOP'</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Second way - anonymous class assigned to variable via defined function<br /></span><span class="default">$ano_class_obj_with_func </span><span class="keyword">= </span><span class="default">ano_func</span><span class="keyword">();<br /><br />function </span><span class="default">ano_func</span><span class="keyword">()<br />{<br />    return new class {<br />        public </span><span class="default">$prop1 </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br />        public </span><span class="default">$prop2 </span><span class="keyword">= </span><span class="default">754</span><span class="keyword">;<br />        const </span><span class="default">SETT </span><span class="keyword">= </span><span class="string">'some config'</span><span class="keyword">;<br /><br />        public function </span><span class="default">getValue</span><span class="keyword">()<br />        {<br />            </span><span class="comment">// do some operation<br />            </span><span class="keyword">return </span><span class="string">'some returned value'</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />        {<br />            </span><span class="comment">// do some operation<br />            </span><span class="keyword">return </span><span class="string">'returned value is '</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">;<br />        }<br />    };<br />}<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ano_class_obj_with_func</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_func</span><span class="keyword">-&gt;</span><span class="default">prop1</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_func</span><span class="keyword">-&gt;</span><span class="default">prop2</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_func</span><span class="keyword">::</span><span class="default">SETT</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_func</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">();<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_func</span><span class="keyword">-&gt;</span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="string">'OOP'</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Third way - passing argument to anonymous class via constructors<br /></span><span class="default">$arg </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// we got it by some operation<br /></span><span class="default">$config </span><span class="keyword">= [</span><span class="default">2</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">]; </span><span class="comment">// we got it by some operation<br /></span><span class="default">$ano_class_obj_with_arg </span><span class="keyword">= </span><span class="default">ano_func_with_arg</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">);<br /><br />function </span><span class="default">ano_func_with_arg</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">)<br />{<br />    return new class(</span><span class="default">$arg</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">) {<br />        public </span><span class="default">$prop1 </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br />        public </span><span class="default">$prop2 </span><span class="keyword">= </span><span class="default">754</span><span class="keyword">;<br />        public </span><span class="default">$prop3</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">;<br />        const </span><span class="default">SETT </span><span class="keyword">= </span><span class="string">'some config'</span><span class="keyword">;<br /><br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prop3 </span><span class="keyword">= </span><span class="default">$arg</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">config </span><span class="keyword">=</span><span class="default">$config</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">getValue</span><span class="keyword">()<br />        {<br />            </span><span class="comment">// do some operation<br />            </span><span class="keyword">return </span><span class="string">'some returned value'</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />        {<br />            </span><span class="comment">// do some operation<br />            </span><span class="keyword">return </span><span class="string">'returned value is '</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">;<br />        }<br />    };<br />}<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">-&gt;</span><span class="default">prop1</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">-&gt;</span><span class="default">prop2</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">::</span><span class="default">SETT</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">();<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$ano_class_obj_with_arg</span><span class="keyword">-&gt;</span><span class="default">getValueWithArgu</span><span class="keyword">(</span><span class="string">'OOP'</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121055">  <div class="votes">
    <div id="Vu121055">
    <a href="/manual/vote-note.php?id=121055&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121055">
    <a href="/manual/vote-note.php?id=121055&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121055" title="72% like this...">
    24
    </div>
  </div>
  <a href="#121055" class="name">
  <strong class="user"><em>ytubeshareit at gmail dot com</em></strong></a><a class="genanchor" href="#121055"> &para;</a><div class="date" title="2017-05-06 01:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121055">
<div class="phpcode"><code><span class="html">Anonymous classes are syntax sugar that may appear deceiving to some.<br />The 'anonymous' class is still parsed into the global scope, where it is auto assigned a name, and every time the class is needed, that global class definition is used.  Example to illustrate....<br /><br />The anonymous class version...<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">return_anon</span><span class="keyword">(){<br />    return new class{<br />         public static </span><span class="default">$str</span><span class="keyword">=</span><span class="string">"foo"</span><span class="keyword">;  <br />    };<br />}<br /></span><span class="default">$test</span><span class="keyword">=</span><span class="default">return_anon</span><span class="keyword">();<br />echo </span><span class="default">$test</span><span class="keyword">::</span><span class="default">$str</span><span class="keyword">; </span><span class="comment">//ouputs foo<br /><br />//we can still access the 'anon' class directly in the global scope! <br /></span><span class="default">$another</span><span class="keyword">=</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">); </span><span class="comment">//get the auto assigned name<br /></span><span class="keyword">echo </span><span class="default">$another</span><span class="keyword">::</span><span class="default">$str</span><span class="keyword">;    </span><span class="comment">//outputs foo<br /></span><span class="default">?&gt;<br /></span><br />The above is functionally the same as doing this....<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">I_named_this_one</span><span class="keyword">{<br />    public static </span><span class="default">$str</span><span class="keyword">=</span><span class="string">"foo"</span><span class="keyword">;<br />}<br />function </span><span class="default">return_not_anon</span><span class="keyword">(){<br />    return </span><span class="string">'I_named_this_one'</span><span class="keyword">;<br />}<br /></span><span class="default">$clzz</span><span class="keyword">=</span><span class="default">return_not_anon</span><span class="keyword">();</span><span class="comment">//get class name<br /></span><span class="keyword">echo </span><span class="default">$clzz</span><span class="keyword">::</span><span class="default">$str</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123605">  <div class="votes">
    <div id="Vu123605">
    <a href="/manual/vote-note.php?id=123605&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123605">
    <a href="/manual/vote-note.php?id=123605&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123605" title="72% like this...">
    11
    </div>
  </div>
  <a href="#123605" class="name">
  <strong class="user"><em>sebastian.wasser at gmail</em></strong></a><a class="genanchor" href="#123605"> &para;</a><div class="date" title="2019-02-12 12:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123605">
<div class="phpcode"><code><span class="html">I wanted to share my findings on static properties of anonymous classes.<br /><br />So, given an anonymous class' object generating function like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">nc </span><span class="keyword">() {<br />    return new class {<br />        public static </span><span class="default">$prop </span><span class="keyword">= [];<br />    };<br />}<br /></span><span class="default">?&gt;<br /></span><br />Getting a new object and changing the static property:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">nc</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">::</span><span class="default">$prop</span><span class="keyword">[] = </span><span class="string">'a'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">::</span><span class="default">$prop</span><span class="keyword">);<br /></span><span class="comment">// array(1) {<br />//   [0] =&gt;<br />//   string(1) "a"<br />// }<br /></span><span class="default">?&gt;<br /></span><br />Now getting another object and changing the static property will change the original one, meaning that the static property is truly static:<br /><br /><span class="default">&lt;?php<br />$b </span><span class="keyword">= </span><span class="default">nc</span><span class="keyword">();<br /></span><span class="default">$b</span><span class="keyword">::</span><span class="default">$prop</span><span class="keyword">[] = </span><span class="string">'b'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">::</span><span class="default">$prop</span><span class="keyword">); </span><span class="comment">// Same as var_dump($a::$prop);<br />// array(2) {<br />//   [0] =&gt;<br />//   string(1) "a"<br />//   [1] =&gt;<br />//   string(1) "b"<br />// }<br /><br /></span><span class="default">assert</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">::</span><span class="default">$prop </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">::</span><span class="default">$prop</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121724">  <div class="votes">
    <div id="Vu121724">
    <a href="/manual/vote-note.php?id=121724&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121724">
    <a href="/manual/vote-note.php?id=121724&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121724" title="71% like this...">
    9
    </div>
  </div>
  <a href="#121724" class="name">
  <strong class="user"><em>j.m \ jamesweb \ ca</em></strong></a><a class="genanchor" href="#121724"> &para;</a><div class="date" title="2017-10-04 12:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121724">
<div class="phpcode"><code><span class="html">/* I like the idea of OneShot classes.<br />Thanks to that Anonymous bro\sist for precising   <br />new class( $a, $b )<br />¯¯¯¯¯¯¯¯¯<br /><br />If you are looking for "Delayed OneShot Anonymous Classes" for any reason (like the reason: loading files in a readable manner while not using autoload), it would probably look something like this; */<br /><br />$u = function()use(&amp;$u){<br />    $u = new class{private $name = 'Utils';};<br />};<br /><br />$w = function(&amp;$rewrite)use(&amp;$w){<br />    $w = null;<br />    $rewrite = new class{private $name = 'DataUtils';};<br />};<br /><br />// Usage;<br />var_dump(<br />    array(<br />        'Delayed',<br />        '( Self Destructive )',<br />        'Anonymous Class Creation',<br />        array(<br />            'Before ( $u )' =&gt; $u,<br />            'Running ( $u() )' =&gt; $u(),<br />            'After ( $u )' =&gt; $u,<br />        ),<br />        0,0,<br />        0,0,<br />        0,0,<br />        'Delayed',<br />        '( Overwriting &amp;&amp; Self Destructive )',<br />        'Anonymous Class Creation',<br />        array(<br />            'Before ( $w )' =&gt; $w,<br />            'Running ( $w($u) )' =&gt; $w($u),<br />            'After ( $w )' =&gt; $w,<br />            'After ( $u )' =&gt; $u<br />        )<br />    )<br />);<br /><br />// btw : oh shoot I failed a spam challenge</span></code></div>
  </div>
 </div>
  <div class="note" id="124026">  <div class="votes">
    <div id="Vu124026">
    <a href="/manual/vote-note.php?id=124026&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124026">
    <a href="/manual/vote-note.php?id=124026&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124026" title="70% like this...">
    7
    </div>
  </div>
  <a href="#124026" class="name">
  <strong class="user"><em>joey</em></strong></a><a class="genanchor" href="#124026"> &para;</a><div class="date" title="2019-07-09 04:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124026">
<div class="phpcode"><code><span class="html">The only way to type hint this would appear to be as object.<br /><br />If you need multiple instances of an anonymous class in a function you can use:<br /><br />$class = function(string $arg):object {<br />    return new class($arg) {<br />        public function __construct(string $arg) {<br />            $this-&gt;ow = $arg;<br />        }<br />    };<br />};<br /><br />Though for the sake of structure it's ill advised to do something like this outside of a single scope or that's used across multiple files. If you class is only used in one scope however then it's probably not a code mess problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="124809">  <div class="votes">
    <div id="Vu124809">
    <a href="/manual/vote-note.php?id=124809&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124809">
    <a href="/manual/vote-note.php?id=124809&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124809" title="63% like this...">
    3
    </div>
  </div>
  <a href="#124809" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#124809"> &para;</a><div class="date" title="2020-03-09 05:27"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124809">
<div class="phpcode"><code><span class="html">you can try these<br /><br /><span class="default">&lt;?php <br /><br />$oracle</span><span class="keyword">=&amp;</span><span class="default">$_</span><span class="keyword">[</span><span class="string">'nice_php'</span><span class="keyword">];<br /></span><span class="default">$_</span><span class="keyword">[</span><span class="string">'nice_php'</span><span class="keyword">]=(function(){<br />    return new class{<br />        public static function </span><span class="default">say</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">){<br />            echo </span><span class="default">$msg</span><span class="keyword">;<br />        }<br /><br />        public static function </span><span class="default">sp</span><span class="keyword">(){<br />            echo </span><span class="default">self</span><span class="keyword">::</span><span class="default">say</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">);<br />        }<br /><br />    };<br />});<br /><br /></span><span class="comment">/*<br />$_['nice_php']()::say('Hello');<br />$_['nice_php']()::sp();<br />$_['nice_php']()::say('World');<br />$_['nice_php']()::sp();<br />$_['nice_php']()::say('!');<br />//almost the same code bottom<br />*/<br /><br /></span><span class="default">$oracle</span><span class="keyword">()::</span><span class="default">say</span><span class="keyword">(</span><span class="string">'Hello'</span><span class="keyword">);<br /></span><span class="default">$oracle</span><span class="keyword">()::</span><span class="default">sp</span><span class="keyword">();<br /></span><span class="default">$oracle</span><span class="keyword">()::</span><span class="default">say</span><span class="keyword">(</span><span class="string">'World'</span><span class="keyword">);<br /></span><span class="default">$oracle</span><span class="keyword">()::</span><span class="default">sp</span><span class="keyword">();<br /></span><span class="default">$oracle</span><span class="keyword">()::</span><span class="default">say</span><span class="keyword">(</span><span class="string">'!'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121021">  <div class="votes">
    <div id="Vu121021">
    <a href="/manual/vote-note.php?id=121021&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121021">
    <a href="/manual/vote-note.php?id=121021&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121021" title="52% like this...">
    1
    </div>
  </div>
  <a href="#121021" class="name">
  <strong class="user"><em>piotr at maslosoft dot com</em></strong></a><a class="genanchor" href="#121021"> &para;</a><div class="date" title="2017-04-26 05:47"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121021">
<div class="phpcode"><code><span class="html">Please note that class name returned by `get_class` might contain null bytes, as is the case in my version of PHP (7.1.4). <br /><br />Name will change when class starting line or it's body is changed.<br /><br />Yes, name is implementation detail that should not be relied upon, but in some rare use cases it is required (annotating anonymous class).</span></code></div>
  </div>
 </div>
  <div class="note" id="129716">  <div class="votes">
    <div id="Vu129716">
    <a href="/manual/vote-note.php?id=129716&amp;page=language.oop5.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129716">
    <a href="/manual/vote-note.php?id=129716&amp;page=language.oop5.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129716" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129716" class="name">
  <strong class="user"><em>ismaelj+php at hotmail dot com</em></strong></a><a class="genanchor" href="#129716"> &para;</a><div class="date" title="2024-08-22 07:38"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129716">
<div class="phpcode"><code><span class="html">Thanks to the new property hooks in PHP 8.4 (<a href="https://wiki.php.net/rfc/property-hooks" rel="nofollow" target="_blank">https://wiki.php.net/rfc/property-hooks</a>) and anonymous functions, now we can create an inner class instantiated only on use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">BaseClass </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">() { echo </span><span class="string">"base class\n"</span><span class="keyword">; }<br /><br />  public </span><span class="default">$childClass  </span><span class="keyword">{ </span><span class="default">set </span><span class="keyword">{}  </span><span class="default">get </span><span class="keyword">{<br />    if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass </span><span class="keyword">= new class {<br />        public function </span><span class="default">__construct</span><span class="keyword">() { echo </span><span class="string">"  child class\n"</span><span class="keyword">; }<br />        public function </span><span class="default">say</span><span class="keyword">(</span><span class="default">string $s</span><span class="keyword">) : </span><span class="default">void </span><span class="keyword">{ echo </span><span class="string">"     </span><span class="default">$s</span><span class="string">\n"</span><span class="keyword">; }<br />      };<br />    }<br /><br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">;<br />    }<br />  }<br />}<br /><br /></span><span class="default">$base </span><span class="keyword">= new </span><span class="default">BaseClass</span><span class="keyword">();<br /><br /></span><span class="default">$base</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">(</span><span class="string">'Hello'</span><span class="keyword">);<br /></span><span class="default">$base</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">(</span><span class="string">'World'</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Output:<br /><br />base class<br />  child class<br />     Hello<br />     World<br />*/<br /></span><span class="default">?&gt;<br /></span><br />The obvious downside is that you can't set a type to the child class, unless  you define an interface and the child class implements it or if the child class extends an existing class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ParentClass </span><span class="keyword">{<br />  public function </span><span class="default">say</span><span class="keyword">(</span><span class="default">string $s</span><span class="keyword">) : </span><span class="default">void </span><span class="keyword">{ echo </span><span class="string">"     </span><span class="default">$s</span><span class="string">\n"</span><span class="keyword">; }<br />}<br /><br />class </span><span class="default">BaseClass </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">() { echo </span><span class="string">"base class\n"</span><span class="keyword">; }<br /><br />  public </span><span class="default">ParentClass $childClass </span><span class="keyword">{ </span><span class="default">set </span><span class="keyword">{}  </span><span class="default">get </span><span class="keyword">{<br />    if (!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">)) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass </span><span class="keyword">= new class extends </span><span class="default">ParentClass </span><span class="keyword">{<br />        public function </span><span class="default">__construct</span><span class="keyword">() { echo </span><span class="string">"  child class\n"</span><span class="keyword">; }<br />      };<br />    }<br /><br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">;<br />    }<br />  }<br />}<br /><br /></span><span class="default">$base </span><span class="keyword">= new </span><span class="default">BaseClass</span><span class="keyword">();<br /><br /></span><span class="default">$base</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">(</span><span class="string">'Hello'</span><span class="keyword">);<br /></span><span class="default">$base</span><span class="keyword">-&gt;</span><span class="default">childClass</span><span class="keyword">-&gt;</span><span class="default">say</span><span class="keyword">(</span><span class="string">'World'</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Output:<br /><br />base class<br />  child class<br />     Hello<br />     World<br />*/<br /></span><span class="default">?&gt;<br /></span>?&gt;<br /><br />This can be also done with functions, but  with hooks to me looks more like in other languages that have this functionality natively.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.anonymous&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.anonymous.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="current">
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
