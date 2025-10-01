<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Comments - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.basic-syntax.comments.php">
 <link rel="shorturl" href="https://www.php.net/basic-syntax.comments">
 <link rel="alternate" href="https://www.php.net/basic-syntax.comments" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.basic-syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.basic-syntax.comments.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.basic-syntax.comments.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.basic-syntax.comments.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.basic-syntax.comments.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.basic-syntax.comments.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.basic-syntax.comments.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.basic-syntax.comments.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.basic-syntax.comments.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.basic-syntax.comments.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.basic-syntax.comments.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.basic-syntax.comments.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Comments" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Comments - Manual" />
<meta name="twitter:description" content="Comments" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Comments - Manual" />
<meta itemprop="description" content="Comments" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Comments" />

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
        <a href="language.types.php">
          Types &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.basic-syntax.instruction-separation.php">
          &laquo; Instruction separation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.basic-syntax.php'>Basic syntax</a></li>      </ul>
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
            <option value='en/language.basic-syntax.comments.php' selected="selected">English</option>
            <option value='de/language.basic-syntax.comments.php'>German</option>
            <option value='es/language.basic-syntax.comments.php'>Spanish</option>
            <option value='fr/language.basic-syntax.comments.php'>French</option>
            <option value='it/language.basic-syntax.comments.php'>Italian</option>
            <option value='ja/language.basic-syntax.comments.php'>Japanese</option>
            <option value='pt_BR/language.basic-syntax.comments.php'>Brazilian Portuguese</option>
            <option value='ru/language.basic-syntax.comments.php'>Russian</option>
            <option value='tr/language.basic-syntax.comments.php'>Turkish</option>
            <option value='uk/language.basic-syntax.comments.php'>Ukrainian</option>
            <option value='zh/language.basic-syntax.comments.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.basic-syntax.comments" class="sect1">
   <h2 class="title">Comments</h2>
   <p class="para">
    PHP supports &#039;C&#039;, &#039;C++&#039; and Unix shell-style (Perl style) comments. For example:
   </p>
   <p class="para">
    <div class="example" id="example-42">
     <p><strong>Example #1 Comments</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"This is a test\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// This is a one-line c++ style comment<br />    /* This is a multi line comment<br />       yet another line of comment */<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">"This is yet another test\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"One Final Test\n"</span><span style="color: #007700">; </span><span style="color: #FF8000"># This is a one-line shell-style comment<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    The &quot;one-line&quot; comment styles only comment to the end of
    the line or the current block of PHP code, whichever comes first.
    This means that HTML code after <code class="literal">// ... ?&gt;</code>
    or <code class="literal"># ...  ?&gt;</code> WILL be printed:
    ?&gt; breaks out of PHP mode and returns to HTML mode, and
    <code class="literal">//</code> or <code class="literal">#</code> cannot influence that.
   </p>
   <p class="para">
    <div class="example" id="example-43">
     <p><strong>Example #2 One Line Comments</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000">&lt;h1&gt;This is an <span style="color: #0000BB">&lt;?php </span><span style="color: #FF8000"># echo 'simple';</span><span style="color: #0000BB">?&gt;</span> example&lt;/h1&gt;<br />&lt;p&gt;The header above will say 'This is an  example'.&lt;/p&gt;</span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    &#039;C&#039; style comments end at the first <code class="literal">*/</code> encountered.
    Make sure you don&#039;t nest &#039;C&#039; style comments. It is easy to make this
    mistake if you are trying to comment out a large block of code.
   </p>
   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /> </span><span style="color: #FF8000">/*<br />    echo 'This is a test'; /* This comment will cause a problem */<br /> </span><span style="color: #007700">*/<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/basic-syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.basic-syntax.comments%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.basic-syntax.comments&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.basic-syntax.comments.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114369">  <div class="votes">
    <div id="Vu114369">
    <a href="/manual/vote-note.php?id=114369&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114369">
    <a href="/manual/vote-note.php?id=114369&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114369" title="74% like this...">
    460
    </div>
  </div>
  <a href="#114369" class="name">
  <strong class="user"><em>J. Prettyman</em></strong></a><a class="genanchor" href="#114369"> &para;</a><div class="date" title="2014-02-13 05:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114369">
<div class="phpcode"><code><span class="html">Notes can come in all sorts of shapes and sizes. They vary, and their uses are completely up to the person writing the code. However, I try to keep things consistent in my code that way it's easy for the next person to read. So something like this might help...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//======================================================================<br />// CATEGORY LARGE FONT<br />//======================================================================<br /><br />//-----------------------------------------------------<br />// Sub-Category Smaller Font<br />//-----------------------------------------------------<br /><br />/* Title Here Notice the First Letters are Capitalized */<br /><br /># Option 1<br /># Option 2<br /># Option 3<br /><br />/*<br /> * This is a detailed explanation<br /> * of something that should require<br /> * several paragraphs of information.<br /> */<br /> <br />// This is a single line quote.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52651">  <div class="votes">
    <div id="Vu52651">
    <a href="/manual/vote-note.php?id=52651&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52651">
    <a href="/manual/vote-note.php?id=52651&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52651" title="69% like this...">
    329
    </div>
  </div>
  <a href="#52651" class="name">
  <strong class="user"><em>M Spreij</em></strong></a><a class="genanchor" href="#52651"> &para;</a><div class="date" title="2005-05-08 12:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52651">
<div class="phpcode"><code><span class="html">A nice way to toggle the commenting of blocks of code can be done by mixing the two comment styles:<br /><span class="default">&lt;?php<br /></span><span class="comment">//*<br /></span><span class="keyword">if (</span><span class="default">$foo</span><span class="keyword">) {<br />  echo </span><span class="default">$bar</span><span class="keyword">;<br />}<br /></span><span class="comment">// */<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$morecode</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Now by taking out one / on the first line..<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />if ($foo) {<br />  echo $bar;<br />}<br />// */<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$morecode</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>..the block is suddenly commented out.<br />This works because a /* .. */ overrides //. You can even "flip" two blocks, like this:<br /><span class="default">&lt;?php<br /></span><span class="comment">//*<br /></span><span class="keyword">if (</span><span class="default">$foo</span><span class="keyword">) {<br />  echo </span><span class="default">$bar</span><span class="keyword">;<br />}<br /></span><span class="comment">/*/<br />if ($bar) {<br />  echo $foo;<br />}<br />// */<br /></span><span class="default">?&gt;<br /></span>vs<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />if ($foo) {<br />  echo $bar;<br />}<br />/*/<br /></span><span class="keyword">if (</span><span class="default">$bar</span><span class="keyword">) {<br />  echo </span><span class="default">$foo</span><span class="keyword">;<br />}<br /></span><span class="comment">// */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128032">  <div class="votes">
    <div id="Vu128032">
    <a href="/manual/vote-note.php?id=128032&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128032">
    <a href="/manual/vote-note.php?id=128032&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128032" title="81% like this...">
    48
    </div>
  </div>
  <a href="#128032" class="name">
  <strong class="user"><em>aetonsi</em></strong></a><a class="genanchor" href="#128032"> &para;</a><div class="date" title="2022-12-21 12:51"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128032">
<div class="phpcode"><code><span class="html">As of php 8, single line comments starting exactly with "#[" have a special meaning: they are treated as "attributes", and they must respect the expected syntax. See: <a href="https://www.php.net/manual/en/language.attributes.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.attributes.php</a><br /><br />So the following code throws an error in php 8+, while it is perfectly valid in php &lt;8:<br /><span class="default">&lt;?php<br /></span><span class="keyword">#[~~</span><span class="default">my super cool comment</span><span class="keyword">~~~]<br /></span><span class="default">?&gt;<br /></span><br />To be safe, just always use "//" comments instead of "#". Maybe in the future there will be other special meanings for the "#" comments, who knows.</span></code></div>
  </div>
 </div>
  <div class="note" id="113438">  <div class="votes">
    <div id="Vu113438">
    <a href="/manual/vote-note.php?id=113438&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113438">
    <a href="/manual/vote-note.php?id=113438&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113438" title="65% like this...">
    150
    </div>
  </div>
  <a href="#113438" class="name">
  <strong class="user"><em>magnesium dot oxide dot play+php at gmail dot com</em></strong></a><a class="genanchor" href="#113438"> &para;</a><div class="date" title="2013-10-10 10:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113438">
<div class="phpcode"><code><span class="html">It is worth mentioning that, HTML comments have no meaning in PHP parser. So,<br /><br />&lt;!-- comment<br /><span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">some_function</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span>--&gt;<br /><br />WILL execute some_function() and echo result inside HTML comment.</span></code></div>
  </div>
 </div>
  <div class="note" id="54296">  <div class="votes">
    <div id="Vu54296">
    <a href="/manual/vote-note.php?id=54296&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54296">
    <a href="/manual/vote-note.php?id=54296&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54296" title="62% like this...">
    63
    </div>
  </div>
  <a href="#54296" class="name">
  <strong class="user"><em>hcderaad at wanadoo dot nl</em></strong></a><a class="genanchor" href="#54296"> &para;</a><div class="date" title="2005-06-29 01:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54296">
<div class="phpcode"><code><span class="html">Comments in PHP can be used for several purposes, a very interesting one being that you can generate API documentation directly from them by using PHPDocumentor (<a href="http://www.phpdoc.org/" rel="nofollow" target="_blank">http://www.phpdoc.org/</a>).<br /><br />Therefor one has to use a JavaDoc-like comment syntax (conforms to the DocBook DTD), example:<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* The second * here opens the DocBook commentblock, which could later on&lt;br&gt;<br />* in your development cycle save you a lot of time by preventing you having to rewrite&lt;br&gt;<br />* major documentation parts to generate some usable form of documentation.<br />*/<br /></span><span class="default">?&gt;<br /></span>Some basic html-like formatting is supported with this (ie &lt;br&gt; tags) to create something of a layout.</span></code></div>
  </div>
 </div>
  <div class="note" id="66693">  <div class="votes">
    <div id="Vu66693">
    <a href="/manual/vote-note.php?id=66693&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66693">
    <a href="/manual/vote-note.php?id=66693&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66693" title="62% like this...">
    52
    </div>
  </div>
  <a href="#66693" class="name">
  <strong class="user"><em>J Lee</em></strong></a><a class="genanchor" href="#66693"> &para;</a><div class="date" title="2006-05-25 11:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66693">
<div class="phpcode"><code><span class="html">MSpreij (8-May-2005) says  /* .. */ overrides //  <br />Anonymous (26-Jan-2006) says // overrides /* .. */<br /><br />Actually, both are correct. Once a comment is opened, *everything* is ignored until the end of the comment (or the end of the php block) is reached.<br /><br />Thus, if a comment is opened with: <br />   //  then /* and */ are "overridden" until after end-of-line <br />   /*  then // is "overridden" until after */</span></code></div>
  </div>
 </div>
  <div class="note" id="48204">  <div class="votes">
    <div id="Vu48204">
    <a href="/manual/vote-note.php?id=48204&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48204">
    <a href="/manual/vote-note.php?id=48204&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48204" title="59% like this...">
    46
    </div>
  </div>
  <a href="#48204" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#48204"> &para;</a><div class="date" title="2004-12-15 04:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48204">
<div class="phpcode"><code><span class="html">Be careful when commenting out regular expressions.<br /><br />E.g. the following causes a parser error.<br /><br />I do prefer using # as regexp delimiter anyway so it won't hurt me ;-)<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="comment">/*<br /><br /> $f-&gt;setPattern('/^\d.*/</span><span class="string">');<br /><br />*/<br /><br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77415">  <div class="votes">
    <div id="Vu77415">
    <a href="/manual/vote-note.php?id=77415&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77415">
    <a href="/manual/vote-note.php?id=77415&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77415" title="56% like this...">
    25
    </div>
  </div>
  <a href="#77415" class="name">
  <strong class="user"><em>theblazingangel at aol dot com</em></strong></a><a class="genanchor" href="#77415"> &para;</a><div class="date" title="2007-08-28 03:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77415">
<div class="phpcode"><code><span class="html">it's perhaps not obvious to some, but the following code will cause a parse error! the ?&gt; in //?&gt; is not treated as commented text, this is a result of having to handle code on one line such as <span class="default">&lt;?php </span><span class="keyword">echo </span><span class="string">'something'</span><span class="keyword">; </span><span class="comment">//comment </span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">1</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">)<br />{<br />    </span><span class="comment">//</span><span class="default">?&gt;<br /></span>}<br />?&gt;<br /><br />i discovered this "anomally" when i commented out a line of code containing a regex which itself contained ?&gt;, with the // style comment.<br />e.g. //preg_match('/^(?&gt;c|b)at$/', 'cat', $matches);<br />will cause an error while commented! using /**/ style comments provides a solution. i don't know about # style comments, i don't ever personally use them.</span></code></div>
  </div>
 </div>
  <div class="note" id="101424">  <div class="votes">
    <div id="Vu101424">
    <a href="/manual/vote-note.php?id=101424&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101424">
    <a href="/manual/vote-note.php?id=101424&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101424" title="55% like this...">
    17
    </div>
  </div>
  <a href="#101424" class="name">
  <strong class="user"><em>jballard at natoga dot com</em></strong></a><a class="genanchor" href="#101424"> &para;</a><div class="date" title="2010-12-15 02:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101424">
<div class="phpcode"><code><span class="html">Comments do NOT take up processing power.<br /><br />So, for all the people who argue that comments are undesired because they take up processing power now have no reason to comment ;)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Control<br /></span><span class="keyword">echo </span><span class="default">microtime</span><span class="keyword">(), </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">; </span><span class="comment">// 0.25163600 1292450508<br /></span><span class="keyword">echo </span><span class="default">microtime</span><span class="keyword">(), </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">; </span><span class="comment">// 0.25186000 1292450508<br /><br />// Test<br /></span><span class="keyword">echo </span><span class="default">microtime</span><span class="keyword">(), </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">; </span><span class="comment">// 0.25189700 1292450508<br /># TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST<br /># .. Above comment repeated 18809 times ..<br /></span><span class="keyword">echo </span><span class="default">microtime</span><span class="keyword">(), </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">; </span><span class="comment">// 0.25192100 1292450508<br /><br /></span><span class="default">?&gt;<br /></span><br />They take up about the same amount of time (about meaning on a repeated testing, sometimes the difference between the control and the test was negative and sometimes positive).</span></code></div>
  </div>
 </div>
  <div class="note" id="97866">  <div class="votes">
    <div id="Vu97866">
    <a href="/manual/vote-note.php?id=97866&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97866">
    <a href="/manual/vote-note.php?id=97866&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97866" title="55% like this...">
    15
    </div>
  </div>
  <a href="#97866" class="name">
  <strong class="user"><em>Wolfsbay at ya dot ru</em></strong></a><a class="genanchor" href="#97866"> &para;</a><div class="date" title="2010-05-12 02:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97866">
<div class="phpcode"><code><span class="html">If you are using editor with code highlight, it’s much easier to notice error like /* */ */.</span></code></div>
  </div>
 </div>
  <div class="note" id="68128">  <div class="votes">
    <div id="Vu68128">
    <a href="/manual/vote-note.php?id=68128&amp;page=language.basic-syntax.comments&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68128">
    <a href="/manual/vote-note.php?id=68128&amp;page=language.basic-syntax.comments&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68128" title="51% like this...">
    6
    </div>
  </div>
  <a href="#68128" class="name">
  <strong class="user"><em>fun at nybbles dot com</em></strong></a><a class="genanchor" href="#68128"> &para;</a><div class="date" title="2006-07-13 10:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68128">
<div class="phpcode"><code><span class="html">a trick I have used in all languages to temporarily block out large sections (usually for test/debug/new-feature purposes), is to set (or define) a var at the top, and use that to conditionally comment the blocks; an added benefit over if(0) (samuli's comment from nov'05) is that u can have several versions or tests running at once, and u dont require cleanup later if u want to keep the blocks in:  just reset the var.<br /><br />personally, I use this more to conditionally include code for new feature testing, than to block it out,,,, but hey, to each their own :)<br /><br />this is also the only safe way I know of to easily nest comments in any language, and great for multi-file use, if the conditional variables are placed in an include :)<br /><br />for example, placed at top of file:<br /><br /><span class="default">&lt;?php $ver3 </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;  <br />       </span><span class="default">$debug2 </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">; <br /></span><span class="default">?&gt;</span> <br /><br />and then deeper inside the file: <br /><br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$ver3</span><span class="keyword">) {<br />           print(</span><span class="string">"This code is included since we are testing version 3"</span><span class="keyword">);<br />         }<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$debug2</span><span class="keyword">) {<br />           print(</span><span class="string">"This code is 'commented' out"</span><span class="keyword">);<br />         }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.basic-syntax.comments&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.basic-syntax.comments.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.basic-syntax.php">Basic syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.phptags.php" title="PHP tags">PHP tags</a>
                        </li>
                                                <li class="">
                            <a href="language.basic-syntax.phpmode.php" title="Escaping from HTML">Escaping from HTML</a>
                        </li>
                                                <li class="">
                            <a href="language.basic-syntax.instruction-separation.php" title="Instruction separation">Instruction separation</a>
                        </li>
                                                <li class="current">
                            <a href="language.basic-syntax.comments.php" title="Comments">Comments</a>
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
