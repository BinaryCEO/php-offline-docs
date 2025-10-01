<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Attributes overview - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.attributes.overview.php">
 <link rel="shorturl" href="https://www.php.net/attributes.overview">
 <link rel="alternate" href="https://www.php.net/attributes.overview" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.attributes.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.attributes.php">
 <link rel="next" href="https://www.php.net/manual/en/language.attributes.syntax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.attributes.overview.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.attributes.overview.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.attributes.overview.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.attributes.overview.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.attributes.overview.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.attributes.overview.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.attributes.overview.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.attributes.overview.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.attributes.overview.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.attributes.overview.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.attributes.overview.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Attributes overview" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Attributes overview - Manual" />
<meta name="twitter:description" content="Attributes overview" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Attributes overview - Manual" />
<meta itemprop="description" content="Attributes overview" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Attributes overview" />

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
        <a href="language.attributes.syntax.php">
          Attribute syntax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.attributes.php">
          &laquo; Attributes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.attributes.php'>Attributes</a></li>      </ul>
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
            <option value='en/language.attributes.overview.php' selected="selected">English</option>
            <option value='de/language.attributes.overview.php'>German</option>
            <option value='es/language.attributes.overview.php'>Spanish</option>
            <option value='fr/language.attributes.overview.php'>French</option>
            <option value='it/language.attributes.overview.php'>Italian</option>
            <option value='ja/language.attributes.overview.php'>Japanese</option>
            <option value='pt_BR/language.attributes.overview.php'>Brazilian Portuguese</option>
            <option value='ru/language.attributes.overview.php'>Russian</option>
            <option value='tr/language.attributes.overview.php'>Turkish</option>
            <option value='uk/language.attributes.overview.php'>Ukrainian</option>
            <option value='zh/language.attributes.overview.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.attributes.overview" class="sect1">
   <h2 class="title">Attributes overview</h2>
   <p class="verinfo">(PHP 8)</p>

   <p class="para">
    PHP attributes provide structured, machine-readable metadata for classes, methods,
    functions, parameters, properties, and constants. They can be inspected at runtime
    via the <a href="book.reflection.php" class="link">Reflection API</a>, enabling dynamic
    behavior without modifying code. Attributes provide a declarative way to annotate
    code with metadata.
   </p>
   <p class="para">
    Attributes enable the decoupling of a feature&#039;s implementation from its usage. While
    interfaces define structure by enforcing methods, attributes provide metadata across multiple 
    elements, including methods, functions, properties, and constants. Unlike interfaces,
    which enforce method implementations, attributes annotate code without altering its structure.
   </p>
   <p class="para">
    Attributes can complement or replace optional interface methods by providing metadata instead of 
    enforced structure. Consider an <code class="literal">ActionHandler</code> interface that represents an 
    operation in an application. Some implementations may require a setup step while others do not. 
    Instead of forcing all classes implementing <code class="literal">ActionHandler</code> to define a 
    <code class="literal">setUp()</code> method, an attribute can indicate setup requirements. This approach
    increases flexibility, allowing attributes to be applied multiple times when necessary.
   </p>

   <div class="example" id="example-430">
    <p><strong>Example #1 Implementing optional methods of an interface with Attributes</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">ActionHandler<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}<br /><br />#[</span><span style="color: #0000BB">Attribute</span><span style="color: #007700">]<br />class </span><span style="color: #0000BB">SetUp </span><span style="color: #007700">{}<br /><br />class </span><span style="color: #0000BB">CopyFile </span><span style="color: #007700">implements </span><span style="color: #0000BB">ActionHandler<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">string $fileName</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">string $targetDirectory</span><span style="color: #007700">;<br /><br />    #[</span><span style="color: #0000BB">SetUp</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">fileExists</span><span style="color: #007700">()<br />    {<br />        if (!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fileName</span><span style="color: #007700">)) {<br />            throw new </span><span style="color: #0000BB">RuntimeException</span><span style="color: #007700">(</span><span style="color: #DD0000">"File does not exist"</span><span style="color: #007700">);<br />        }<br />    }<br /><br />    #[</span><span style="color: #0000BB">SetUp</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">targetDirectoryExists</span><span style="color: #007700">()<br />    {<br />        if (!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory</span><span style="color: #007700">);<br />        } elseif (!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory</span><span style="color: #007700">)) {<br />            throw new </span><span style="color: #0000BB">RuntimeException</span><span style="color: #007700">(</span><span style="color: #DD0000">"Target directory </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory</span><span style="color: #DD0000"> is not a directory"</span><span style="color: #007700">);<br />        }<br />    }<br /><br />    public function </span><span style="color: #0000BB">execute</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fileName</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory </span><span style="color: #007700">. </span><span style="color: #DD0000">'/' </span><span style="color: #007700">. </span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fileName</span><span style="color: #007700">));<br />    }<br />}<br /><br />function </span><span style="color: #0000BB">executeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">ActionHandler $actionHandler</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$reflection </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$actionHandler</span><span style="color: #007700">);<br /><br />    foreach (</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">() as </span><span style="color: #0000BB">$method</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$attributes </span><span style="color: #007700">= </span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">SetUp</span><span style="color: #007700">::class);<br /><br />        if (</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">) &gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$methodName </span><span style="color: #007700">= </span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br /><br />            </span><span style="color: #0000BB">$actionHandler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">();<br />        }<br />    }<br /><br />    </span><span style="color: #0000BB">$actionHandler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">$copyAction </span><span style="color: #007700">= new </span><span style="color: #0000BB">CopyFile</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$copyAction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fileName </span><span style="color: #007700">= </span><span style="color: #DD0000">"/tmp/foo.jpg"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$copyAction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">targetDirectory </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/user"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">executeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$copyAction</span><span style="color: #007700">);</span></span></code></div>
     </div>

    </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/attributes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.attributes.overview%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.attributes.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.attributes.overview.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126899">  <div class="votes">
    <div id="Vu126899">
    <a href="/manual/vote-note.php?id=126899&amp;page=language.attributes.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126899">
    <a href="/manual/vote-note.php?id=126899&amp;page=language.attributes.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126899" title="70% like this...">
    51
    </div>
  </div>
  <a href="#126899" class="name">
  <strong class="user"><em>Harshdeep</em></strong></a><a class="genanchor" href="#126899"> &para;</a><div class="date" title="2022-03-04 05:22"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126899">
<div class="phpcode"><code><span class="html">While the example displays us what we can accomplish with attributes, it should be kept in mind that the main idea behind attributes is to attach static metadata to code (methods, properties, etc.). <br /><br />This metadata often includes concepts such as "markers" and "configuration". For example, you can write a serializer using reflection that only serializes marked properties (with optional configuration, such as field name in serialized file). This is reminiscent of serializers written for C# applications.<br /><br />That said, full reflection and attributes go hand in hand. If your use case is satisfied by inheritance or interfaces, prefer that. The most common use case for attributes is when you have no prior information about the provided object/class.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">JsonSerializable<br /></span><span class="keyword">{<br />    public function </span><span class="default">toJson</span><span class="keyword">() : array;<br />}<br /></span><span class="default">?&gt;<br /></span><br />versus, using attributes,<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">#[</span><span class="default">Attribute</span><span class="keyword">]<br />class </span><span class="default">JsonSerialize <br /></span><span class="keyword">{<br />    public function </span><span class="default">__constructor</span><span class="keyword">(public ?</span><span class="default">string $fieldName </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {}<br />}<br /><br />class </span><span class="default">VersionedObject<br /></span><span class="keyword">{<br />   #[</span><span class="default">JsonSerialize</span><span class="keyword">]<br />    public const </span><span class="default">version </span><span class="keyword">= </span><span class="string">'0.0.1'</span><span class="keyword">;<br />}<br /><br />public class </span><span class="default">UserLandClass </span><span class="keyword">extends </span><span class="default">VersionedObject<br /></span><span class="keyword">{<br />    #[</span><span class="default">JsonSerialize</span><span class="keyword">(</span><span class="string">'call it Jackson'</span><span class="keyword">)]<br />    public </span><span class="default">string $myValue</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span>The example above is a little extra convoluted with the existence of the VersionedObject class as I wished to display that with attribute mark ups, you do not need to care how the base class manages its attributes (no call to parent in overriden method).</span></code></div>
  </div>
 </div>
  <div class="note" id="127899">  <div class="votes">
    <div id="Vu127899">
    <a href="/manual/vote-note.php?id=127899&amp;page=language.attributes.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127899">
    <a href="/manual/vote-note.php?id=127899&amp;page=language.attributes.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127899" title="79% like this...">
    47
    </div>
  </div>
  <a href="#127899" class="name">
  <strong class="user"><em>Florian Krmer</em></strong></a><a class="genanchor" href="#127899"> &para;</a><div class="date" title="2022-11-05 09:57"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127899">
<div class="phpcode"><code><span class="html">I've tried Harshdeeps example and it didn't run out of the box and I think it is not complete, so I wrote a complete and working naive example regarding attribute based serialization.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />#[</span><span class="default">Attribute</span><span class="keyword">(</span><span class="default">Attribute</span><span class="keyword">::</span><span class="default">TARGET_CLASS_CONSTANT</span><span class="keyword">|</span><span class="default">Attribute</span><span class="keyword">::</span><span class="default">TARGET_PROPERTY</span><span class="keyword">)]<br />class </span><span class="default">JsonSerialize<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(public ?</span><span class="default">string $fieldName </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {}<br />}<br /><br />class </span><span class="default">VersionedObject<br /></span><span class="keyword">{<br />    #[</span><span class="default">JsonSerialize</span><span class="keyword">]<br />    public const </span><span class="default">version </span><span class="keyword">= </span><span class="string">'0.0.1'</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">UserLandClass </span><span class="keyword">extends </span><span class="default">VersionedObject<br /></span><span class="keyword">{<br />    protected </span><span class="default">string $notSerialized </span><span class="keyword">= </span><span class="string">'nope'</span><span class="keyword">;<br /><br />    #[</span><span class="default">JsonSerialize</span><span class="keyword">(</span><span class="string">'foobar'</span><span class="keyword">)]<br />    public </span><span class="default">string $myValue </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />    #[</span><span class="default">JsonSerialize</span><span class="keyword">(</span><span class="string">'companyName'</span><span class="keyword">)]<br />    public </span><span class="default">string $company </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />    #[</span><span class="default">JsonSerialize</span><span class="keyword">(</span><span class="string">'userLandClass'</span><span class="keyword">)]<br />    protected ?</span><span class="default">UserLandClass $test</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(?</span><span class="default">UserLandClass $userLandClass </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="default">$userLandClass</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">AttributeBasedJsonSerializer </span><span class="keyword">{<br /><br />    protected const </span><span class="default">ATTRIBUTE_NAME </span><span class="keyword">= </span><span class="string">'JsonSerialize'</span><span class="keyword">;<br /><br />    public function </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">)<br />    {<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">extract</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br /><br />        return </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">JSON_THROW_ON_ERROR</span><span class="keyword">);<br />    }<br /><br />    protected function </span><span class="default">reflectProperties</span><span class="keyword">(array </span><span class="default">$data</span><span class="keyword">, </span><span class="default">ReflectionClass $reflectionClass</span><span class="keyword">, </span><span class="default">object $object</span><span class="keyword">)<br />    {<br />        </span><span class="default">$reflectionProperties </span><span class="keyword">= </span><span class="default">$reflectionClass</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();<br />        foreach (</span><span class="default">$reflectionProperties </span><span class="keyword">as </span><span class="default">$reflectionProperty</span><span class="keyword">) {<br />            </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">$reflectionProperty</span><span class="keyword">-&gt;</span><span class="default">getAttributes</span><span class="keyword">(static::</span><span class="default">ATTRIBUTE_NAME</span><span class="keyword">);<br />            foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$attribute</span><span class="keyword">) {<br />                </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">newInstance</span><span class="keyword">();<br />                </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">fieldName </span><span class="keyword">?? </span><span class="default">$reflectionProperty</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$reflectionProperty</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br />                if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">extract</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />                }<br />                </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br /><br />        return </span><span class="default">$data</span><span class="keyword">;<br />    }<br /><br />    protected function </span><span class="default">reflectConstants</span><span class="keyword">(array </span><span class="default">$data</span><span class="keyword">, </span><span class="default">ReflectionClass $reflectionClass</span><span class="keyword">)<br />    {<br />        </span><span class="default">$reflectionConstants </span><span class="keyword">= </span><span class="default">$reflectionClass</span><span class="keyword">-&gt;</span><span class="default">getReflectionConstants</span><span class="keyword">();<br />        foreach (</span><span class="default">$reflectionConstants </span><span class="keyword">as </span><span class="default">$reflectionConstant</span><span class="keyword">) {<br />            </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">$reflectionConstant</span><span class="keyword">-&gt;</span><span class="default">getAttributes</span><span class="keyword">(static::</span><span class="default">ATTRIBUTE_NAME</span><span class="keyword">);<br />            foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$attribute</span><span class="keyword">) {<br />                </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">newInstance</span><span class="keyword">();<br />                </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">fieldName </span><span class="keyword">?? </span><span class="default">$reflectionConstant</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$reflectionConstant</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">();<br />                if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">extract</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />                }<br />                </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br /><br />        return </span><span class="default">$data</span><span class="keyword">;<br />    }<br /><br />    protected function </span><span class="default">extract</span><span class="keyword">(</span><span class="default">object $object</span><span class="keyword">)<br />    {<br />        </span><span class="default">$data </span><span class="keyword">= [];<br />        </span><span class="default">$reflectionClass </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">reflectProperties</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$reflectionClass</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">reflectConstants</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$reflectionClass</span><span class="keyword">);<br /><br />        return </span><span class="default">$data</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$userLandClass </span><span class="keyword">= new </span><span class="default">UserLandClass</span><span class="keyword">();<br /></span><span class="default">$userLandClass</span><span class="keyword">-&gt;</span><span class="default">company </span><span class="keyword">= </span><span class="string">'some company name'</span><span class="keyword">;<br /></span><span class="default">$userLandClass</span><span class="keyword">-&gt;</span><span class="default">myValue </span><span class="keyword">= </span><span class="string">'my value'</span><span class="keyword">;<br /><br /></span><span class="default">$userLandClass2 </span><span class="keyword">= new </span><span class="default">UserLandClass</span><span class="keyword">(</span><span class="default">$userLandClass</span><span class="keyword">);<br /></span><span class="default">$userLandClass2</span><span class="keyword">-&gt;</span><span class="default">company </span><span class="keyword">= </span><span class="string">'second'</span><span class="keyword">;<br /></span><span class="default">$userLandClass2</span><span class="keyword">-&gt;</span><span class="default">myValue </span><span class="keyword">= </span><span class="string">'my second value'</span><span class="keyword">;<br /><br /></span><span class="default">$serializer </span><span class="keyword">= new </span><span class="default">AttributeBasedJsonSerializer</span><span class="keyword">();<br /></span><span class="default">$json </span><span class="keyword">= </span><span class="default">$serializer</span><span class="keyword">-&gt;</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$userLandClass2</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.attributes.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.attributes.overview.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.attributes.php">Attributes</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="language.attributes.overview.php" title="Attributes overview">Attributes overview</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.syntax.php" title="Attribute syntax">Attribute syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.reflection.php" title="Reading Attributes with the Reflection API">Reading Attributes with the Reflection API</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.classes.php" title="Declaring Attribute Classes">Declaring Attribute Classes</a>
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
