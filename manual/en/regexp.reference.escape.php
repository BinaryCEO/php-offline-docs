<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Escape sequences - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.escape.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.escape.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.escape.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.meta.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.unicode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.escape.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.escape.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.escape.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.escape.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.escape.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.escape.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.escape.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.escape.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.escape.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.escape.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.escape.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escape sequences" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Escape sequences - Manual" />
<meta name="twitter:description" content="Escape sequences" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Escape sequences - Manual" />
<meta itemprop="description" content="Escape sequences" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escape sequences" />

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
        <a href="regexp.reference.unicode.php">
          Unicode character properties &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.meta.php">
          &laquo; Meta-characters        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      <li><a href='reference.pcre.pattern.syntax.php'>PCRE regex syntax</a></li>      </ul>
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
            <option value='en/regexp.reference.escape.php' selected="selected">English</option>
            <option value='de/regexp.reference.escape.php'>German</option>
            <option value='es/regexp.reference.escape.php'>Spanish</option>
            <option value='fr/regexp.reference.escape.php'>French</option>
            <option value='it/regexp.reference.escape.php'>Italian</option>
            <option value='ja/regexp.reference.escape.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.escape.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.escape.php'>Russian</option>
            <option value='tr/regexp.reference.escape.php'>Turkish</option>
            <option value='uk/regexp.reference.escape.php'>Ukrainian</option>
            <option value='zh/regexp.reference.escape.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.escape" class="section">
  <h2 class="title">Escape sequences</h2>
  <p class="para">
   The backslash character has several uses. Firstly, if it is
   followed by a non-alphanumeric character, it takes away any
   special meaning that character may have. This use of
   backslash as an escape character applies both inside and
   outside character classes.
  </p>
  <p class="para">
   For example, if you want to match a &quot;*&quot; character, you write
   &quot;\*&quot; in the pattern. This applies whether or not the
   following character would otherwise be interpreted as a
   meta-character, so it is always safe to precede a non-alphanumeric
   with &quot;\&quot; to specify that it stands for itself. In
   particular, if you want to match a backslash, you write &quot;\\&quot;.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Single and double quoted PHP <a href="language.types.string.php#language.types.string.syntax" class="link">strings</a> have special
    meaning of backslash. Thus if \ has to be matched with a regular
    expression \\, then &quot;\\\\&quot; or &#039;\\\\&#039; must be used in PHP code.
   </p>
  </p></blockquote>
  <p class="para">
   If a pattern is compiled with the
   <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_EXTENDED</a> option,
   whitespace in the pattern (other than in a character class) and
   characters between a &quot;#&quot; outside a character class and the next newline
   character are ignored. An escaping backslash can be used to include a
   whitespace or &quot;#&quot; character as part of the pattern.
  </p>
  <p class="para">
   A second use of backslash provides a way of encoding
   non-printing characters in patterns in a visible manner. There
   is no restriction on the appearance of non-printing characters,
   apart from the binary zero that terminates a pattern,
   but when a pattern is being prepared by text editing, it is
   usually easier to use one of the following escape sequences
   than the binary character it represents:
  </p>
  <p class="para">
   <dl>
    
     <dt><em>\a</em></dt>
     <dd>
      <span class="simpara">alarm, that is, the BEL character (hex 07)</span>
     </dd>
    
    
     <dt><em>\cx</em></dt>
     <dd>
      <span class="simpara">&quot;control-x&quot;, where x is any character</span>
     </dd>
    
    
     <dt><em>\e</em></dt>
     <dd>
      <span class="simpara">escape (hex 1B)</span>
     </dd>
    
    
     <dt><em>\f</em></dt>
     <dd>
      <span class="simpara">formfeed (hex 0C)</span>
     </dd>
    
    
     <dt><em>\n</em></dt>
     <dd>
      <span class="simpara">newline (hex 0A)</span>
     </dd>
    
    
     <dt><em>\p{xx}</em></dt>
     <dd>
      <span class="simpara">
       a character with the xx property, see
       <a href="regexp.reference.unicode.php" class="link">unicode properties</a>
       for more info
      </span>
     </dd>
    
    
     <dt><em>\P{xx}</em></dt>
     <dd>
      <span class="simpara">
       a character without the xx property, see
       <a href="regexp.reference.unicode.php" class="link">unicode properties</a>
       for more info
      </span>
     </dd>
    
    
     <dt><em>\r</em></dt>
     <dd>
      <span class="simpara">carriage return (hex 0D)</span>
     </dd>
    
    
     <dt><em>\R</em></dt>
     <dd>
      <span class="simpara">line break: matches \n, \r and \r\n</span>
     </dd>
    
    
     <dt><em>\t</em></dt>
     <dd>
      <span class="simpara">tab (hex 09)</span>
     </dd>
    
    
     <dt><em>\xhh</em></dt>
     <dd>
      <span class="simpara">
       character with hex code hh
      </span>
     </dd>
    
    
     <dt><em>\ddd</em></dt>
     <dd>
      <span class="simpara">character with octal code ddd, or backreference</span>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   The precise effect of &quot;<code class="literal">\cx</code>&quot; is as follows:
   if &quot;<code class="literal">x</code>&quot; is a lower case letter, it is converted
   to upper case. Then bit 6 of the character (hex 40) is inverted.
   Thus &quot;<code class="literal">\cz</code>&quot; becomes hex 1A, but
   &quot;<code class="literal">\c{</code>&quot; becomes hex 3B, while &quot;<code class="literal">\c;</code>&quot;
   becomes hex 7B.
  </p>
  <p class="para">
   After &quot;<code class="literal">\x</code>&quot;, up to two hexadecimal digits are
   read (letters can be in upper or lower case).
   In <em>UTF-8 mode</em>, &quot;<code class="literal">\x{...}</code>&quot; is
   allowed, where the contents of the braces is a string of hexadecimal
   digits. It is interpreted as a UTF-8 character whose code number is the
   given hexadecimal number. The original hexadecimal escape sequence,
   <code class="literal">\xhh</code>, matches a two-byte UTF-8 character if the value
   is greater than 127.
  </p>
  <p class="para">
   After &quot;<code class="literal">\0</code>&quot; up to two further octal digits are read.
   In both cases, if there are fewer than two digits, just those that
   are present are used. Thus the sequence &quot;<code class="literal">\0\x\07</code>&quot;
   specifies two binary zeros followed by a BEL character. Make sure you
   supply two digits after the initial zero if the character
   that follows is itself an octal digit.
  </p>
  <p class="para">
   The handling of a backslash followed by a digit other than 0
   is complicated. Outside a character class, PCRE reads it
   and any following digits as a decimal number. If the number
   is less than 10, or if there have been at least that many
   previous capturing left parentheses in the expression, the
   entire sequence is taken as a <em>back reference</em>. A description
   of how this works is given later, following the discussion
   of parenthesized subpatterns.
  </p>
  <p class="para">
   Inside a character class, or if the decimal number is
   greater than 9 and there have not been that many capturing
   subpatterns, PCRE re-reads up to three octal digits following
   the backslash, and generates a single byte from the
   least significant 8 bits of the value. Any subsequent digits
   stand for themselves. For example:
  </p>
  <p class="para">
   <dl>
    
     <dt><em>\040</em></dt>
     <dd><span class="simpara">is another way of writing a space</span></dd>
    
    
     <dt><em>\40</em></dt>
     <dd>
      <span class="simpara">
       is the same, provided there are fewer than 40
       previous capturing subpatterns
      </span>
     </dd>
    
    
     <dt><em>\7</em></dt>
     <dd><span class="simpara">is always a back reference</span></dd>
    
    
     <dt><em>\11</em></dt>
     <dd>
      <span class="simpara">
       might be a back reference, or another way of
       writing a tab
      </span>
     </dd>
    
    
     <dt><em>\011</em></dt>
     <dd><span class="simpara">is always a tab</span></dd>
    
    
     <dt><em>\0113</em></dt>
     <dd><span class="simpara">is a tab followed by the character &quot;3&quot;</span></dd>
    
    
     <dt><em>\113</em></dt>
     <dd>
      <span class="simpara">
       is the character with octal code 113 (since there
       can be no more than 99 back references)
      </span>
     </dd>
    
    
     <dt><em>\377</em></dt>
     <dd><span class="simpara">is a byte consisting entirely of 1 bits</span></dd>
    
    
     <dt><em>\81</em></dt>
     <dd>
      <span class="simpara">
       is either a back reference, or a binary zero
       followed by the two characters &quot;8&quot; and &quot;1&quot;
      </span>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   Note that octal values of 100 or greater must not be
   introduced by a leading zero, because no more than three octal
   digits are ever read.
  </p>
  <p class="para">
   All the sequences that define a single byte value can be
   used both inside and outside character classes. In addition,
   inside a character class, the sequence &quot;<code class="literal">\b</code>&quot;
   is interpreted as the backspace character (hex 08). Outside a character
   class it has a different meaning (see below).
  </p>
  <p class="para">
   The third use of backslash is for specifying generic
   character types:
  </p>
  <p class="para">
   <dl>
    
     <dt><em>\d</em></dt>
     <dd><span class="simpara">any decimal digit</span></dd>
    
    
     <dt><em>\D</em></dt>
     <dd><span class="simpara">any character that is not a decimal digit</span></dd>
    
    
     <dt><em>\h</em></dt>
     <dd><span class="simpara">any horizontal whitespace character</span></dd>
    
    
     <dt><em>\H</em></dt>
     <dd><span class="simpara">any character that is not a horizontal whitespace character</span></dd>
    
    
     <dt><em>\s</em></dt>
     <dd><span class="simpara">any whitespace character</span></dd>
    
    
     <dt><em>\S</em></dt>
     <dd><span class="simpara">any character that is not a whitespace character</span></dd>
    
    
     <dt><em>\v</em></dt>
     <dd><span class="simpara">any vertical whitespace character</span></dd>
    
    
     <dt><em>\V</em></dt>
     <dd><span class="simpara">any character that is not a vertical whitespace character</span></dd>
    
    
     <dt><em>\w</em></dt>
     <dd><span class="simpara">any &quot;word&quot; character</span></dd>
    
    
     <dt><em>\W</em></dt>
     <dd><span class="simpara">any &quot;non-word&quot; character</span></dd>
    
   </dl>
  </p>
  <p class="para">
   Each pair of escape sequences partitions the complete set of
   characters into two disjoint sets. Any given character
   matches one, and only one, of each pair.
  </p>
  <p class="para">
   The &quot;whitespace&quot; characters are HT (9), LF (10), FF (12), CR (13),
   and space (32). However, if locale-specific matching is happening,
   characters with code points in the range 128-255 may also be considered
   as whitespace characters, for instance, NBSP (A0).
  </p>
  <p class="para">
   A &quot;word&quot; character is any letter or digit or the underscore
   character, that is, any character which can be part of a
   Perl &quot;<em>word</em>&quot;. The definition of letters and digits is
   controlled by PCRE&#039;s character tables, and may vary if locale-specific
   matching is taking place. For example, in the &quot;fr&quot; (French) locale, some
   character codes greater than 128 are used for accented letters,
   and these are matched by <code class="literal">\w</code>.
  </p>
  <p class="para">
   These character type sequences can appear both inside and
   outside character classes. They each match one character of
   the appropriate type. If the current matching point is at
   the end of the subject string, all of them fail, since there
   is no character to match.
  </p>
  <p class="para">
   The fourth use of backslash is for certain simple
   assertions. An assertion specifies a condition that has to be met
   at a particular point in a match, without consuming any
   characters from the subject string. The use of subpatterns
   for more complicated assertions is described below. The
   backslashed assertions are
  </p>
  <p class="para">
   <dl>
    
     <dt><em>\b</em></dt>
     <dd><span class="simpara">word boundary</span></dd>
    
    
     <dt><em>\B</em></dt>
     <dd><span class="simpara">not a word boundary</span></dd>
    
    
     <dt><em>\A</em></dt>
     <dd><span class="simpara">start of subject (independent of multiline mode)</span></dd>
    
    
     <dt><em>\Z</em></dt>
     <dd>
      <span class="simpara">
       end of subject or newline at end (independent of
       multiline mode)
      </span>
     </dd>
    
    
     <dt><em>\z</em></dt>
     <dd><span class="simpara">end of subject (independent of multiline mode)</span></dd>
    
    
     <dt><em>\G</em></dt>
     <dd><span class="simpara">first matching position in subject</span></dd>
    
   </dl>
  </p>
  <p class="para">
   These assertions may not appear in character classes (but
   note that &quot;<code class="literal">\b</code>&quot; has a different meaning, namely the backspace
   character, inside a character class).
  </p>
  <p class="para">
   A word boundary is a position in the subject string where
   the current character and the previous character do not both
   match <code class="literal">\w</code> or <code class="literal">\W</code> (i.e. one matches
   <code class="literal">\w</code> and the other matches
   <code class="literal">\W</code>), or the start or end of the string if the first
   or last character matches <code class="literal">\w</code>, respectively.
  </p>
  <p class="para">
   The <code class="literal">\A</code>, <code class="literal">\Z</code>, and
   <code class="literal">\z</code> assertions differ from the traditional
   circumflex and dollar (described in <a href="regexp.reference.anchors.php" class="link">anchors</a> )
   in that they only ever match at the very start and end of the subject string,
   whatever options are set. They are not affected by the
   <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_MULTILINE</a> or
   <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_DOLLAR_ENDONLY</a>
   options. The difference between <code class="literal">\Z</code> and
   <code class="literal">\z</code> is that <code class="literal">\Z</code> matches before a
   newline that is the last character of the string as well as at the end of
   the string, whereas <code class="literal">\z</code> matches only at the end.
  </p>
  <p class="para">
   The <code class="literal">\G</code> assertion is true only when the current
   matching position is at the start point of the match, as specified by
   the <code class="parameter">offset</code> argument of
   <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span>. It differs from <code class="literal">\A</code>
   when the value of <code class="parameter">offset</code> is non-zero.
  </p>

  <p class="para">
   <code class="literal">\Q</code> and <code class="literal">\E</code> can be used to ignore
   regexp metacharacters in the pattern. For example:
   <code class="literal">\w+\Q.$.\E$</code> will match one or more word characters,
   followed by literals <code class="literal">.$.</code> and anchored at the end of
   the string. Note that this does not change the behavior of 
   delimiters; for instance the pattern <code class="literal">#\Q#\E#$</code>
   is not valid, because the second <code class="literal">#</code> marks the end
   of the pattern, and the <code class="literal">\E#</code> is interpreted as invalid
   modifiers.
  </p>

  <p class="para">
   <code class="literal">\K</code> can be used to reset the match start. 
   For example, the pattern <code class="literal">foo\Kbar</code> matches
   &quot;foobar&quot;, but reports that it has matched &quot;bar&quot;. The use of
   <code class="literal">\K</code> does not interfere with the setting of captured
   substrings. For example, when the pattern <code class="literal">(foo)\Kbar</code>
   matches &quot;foobar&quot;, the first substring is still set to &quot;foo&quot;.
  </p>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.escape%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.escape&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.escape.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108096">  <div class="votes">
    <div id="Vu108096">
    <a href="/manual/vote-note.php?id=108096&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108096">
    <a href="/manual/vote-note.php?id=108096&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108096" title="64% like this...">
    51
    </div>
  </div>
  <a href="#108096" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#108096"> &para;</a><div class="date" title="2012-03-28 07:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108096">
<div class="phpcode"><code><span class="html">"line break" is ill-defined:<br /><br /> -- Windows uses CR+LF (\r\n)<br /> -- Linux LF (\n)<br /> -- OSX CR (\r)<br /><br />Little-known special character:<br />\R in preg_* matches all three.<br /><br />preg_match( '/^\R$/', "match\nany\\n\rline\r\nending\r" ); // match any line endings</span></code></div>
  </div>
 </div>
  <div class="note" id="122423">  <div class="votes">
    <div id="Vu122423">
    <a href="/manual/vote-note.php?id=122423&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122423">
    <a href="/manual/vote-note.php?id=122423&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122423" title="72% like this...">
    10
    </div>
  </div>
  <a href="#122423" class="name">
  <strong class="user"><em>Wirek</em></strong></a><a class="genanchor" href="#122423"> &para;</a><div class="date" title="2018-02-22 01:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122423">
<div class="phpcode"><code><span class="html">Significantly updated version (with new $pat4 utilising \R properly, its results and comments):<br />Note that there are (sometimes difficult to grasp at first glance) nuances of meaning and application of escape sequences like \r, \R and \v - none of them is perfect in all situations, but they are quite useful nevertheless. Some official PCRE control options and their changes come in handy too - unfortunately neither (*ANYCRLF), (*ANY) nor (*CRLF) is documented here on php.net at the moment (although they seem to be available for over 10 years and 5 months now), but they are described on Wikipedia ("Newline/linebreak options" at <a href="https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions</a>) and official PCRE library site ("Newline convention" at <a href="http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17" rel="nofollow" target="_blank">http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17</a>) pretty well. The functionality of \R appears somehow disappointing (with default configuration of compile time option) according to php.net as well as official description ("Newline sequences" at <a href="https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq" rel="nofollow" target="_blank">https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq</a>) when used improperly.<br />A hint for those of you who are trying to fight off (or work around at least) the problem of matching a pattern correctly at the end ($) of any line in multiple lines mode (/m).<br /><span class="default">&lt;?php <br /></span><span class="comment">// Various OS-es have various end line (a.k.a line break) chars:<br />// - Windows uses CR+LF (\r\n);<br />// - Linux LF (\n);<br />// - OSX CR (\r).<br />// And that's why single dollar meta assertion ($) sometimes fails with multiline modifier (/m) mode - possible bug in PHP 5.3.8 or just a "feature"(?).<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"ABC ABC\n\n123 123\r\ndef def\rnop nop\r\n890 890\nQRS QRS\r\r~-_ ~-_"</span><span class="keyword">;<br /></span><span class="comment">//          C          3                   p          0                   _<br /></span><span class="default">$pat1</span><span class="keyword">=</span><span class="string">'/\w$/mi'</span><span class="keyword">;    </span><span class="comment">// This works excellent in JavaScript (Firefox 7.0.1+)<br /></span><span class="default">$pat2</span><span class="keyword">=</span><span class="string">'/\w\r?$/mi'</span><span class="keyword">;    </span><span class="comment">// Slightly better<br /></span><span class="default">$pat3</span><span class="keyword">=</span><span class="string">'/\w\R?$/mi'</span><span class="keyword">;    </span><span class="comment">// Somehow disappointing according to php.net and pcre.org when used improperly<br /></span><span class="default">$pat4</span><span class="keyword">=</span><span class="string">'/\w(?=\R)/i'</span><span class="keyword">;    </span><span class="comment">// Much better with allowed lookahead assertion (just to detect without capture) without multiline (/m) mode; note that with alternative for end of string ((?=\R|$)) it would grab all 7 elements as expected<br /></span><span class="default">$pat5</span><span class="keyword">=</span><span class="string">'/\w\v?$/mi'</span><span class="keyword">;<br /></span><span class="default">$pat6</span><span class="keyword">=</span><span class="string">'/(*ANYCRLF)\w$/mi'</span><span class="keyword">;    </span><span class="comment">// Excellent but undocumented on php.net at the moment (described on pcre.org and en.wikipedia.org)<br /></span><span class="default">$n</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat1</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m1</span><span class="keyword">);<br /></span><span class="default">$o</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat2</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m2</span><span class="keyword">);<br /></span><span class="default">$p</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat3</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m3</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat4</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m4</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat5</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m5</span><span class="keyword">);<br /></span><span class="default">$t</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat6</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m6</span><span class="keyword">);<br />echo </span><span class="default">$str</span><span class="keyword">.</span><span class="string">"\n1 !!! </span><span class="default">$pat1</span><span class="string"> (</span><span class="default">$n</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n2 !!! </span><span class="default">$pat2</span><span class="string"> (</span><span class="default">$o</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n3 !!! </span><span class="default">$pat3</span><span class="string"> (</span><span class="default">$p</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n4 !!! </span><span class="default">$pat4</span><span class="string"> (</span><span class="default">$r</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n5 !!! </span><span class="default">$pat5</span><span class="string"> (</span><span class="default">$s</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m5</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n6 !!! </span><span class="default">$pat6</span><span class="string"> (</span><span class="default">$t</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m6</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">// Note the difference among the three very helpful escape sequences in $pat2 (\r), $pat3 and $pat4 (\R), $pat5 (\v) and altered newline option in $pat6 ((*ANYCRLF)) - for some applications at least.<br /><br />/* The code above results in the following output:<br />ABC ABC<br /><br />123 123<br />def def<br />nop nop<br />890 890<br />QRS QRS<br /><br />~-_ ~-_<br />1 !!! /\w$/mi (3): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 0<br />    [2] =&gt; _<br />)<br /><br />2 !!! /\w\r?$/mi (5): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />3 !!! /\w\R?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />4 !!! /\w(?=\R)/i (6): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; f<br />    [3] =&gt; p<br />    [4] =&gt; 0<br />    [5] =&gt; S<br />)<br /><br />5 !!! /\w\v?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />6 !!! /(*ANYCRLF)\w$/mi (7): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; f<br />    [3] =&gt; p<br />    [4] =&gt; 0<br />    [5] =&gt; S<br />    [6] =&gt; _<br />)<br /> */<br /></span><span class="default">?&gt;<br /></span>Unfortunately, I haven't got any access to a server with the latest PHP version - my local PHP is 5.3.8 and my public host's PHP is version 5.2.17.</span></code></div>
  </div>
 </div>
  <div class="note" id="104553">  <div class="votes">
    <div id="Vu104553">
    <a href="/manual/vote-note.php?id=104553&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104553">
    <a href="/manual/vote-note.php?id=104553&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104553" title="59% like this...">
    9
    </div>
  </div>
  <a href="#104553" class="name">
  <strong class="user"><em>grigor at the domain gatchev.info</em></strong></a><a class="genanchor" href="#104553"> &para;</a><div class="date" title="2011-06-22 01:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104553">
<div class="phpcode"><code><span class="html">As \v matches both single char line ends (CR, LF) and double char (CR+LF, LF+CR), it is not a fixed length atom (eg. is not allowed in lookbehind assertions).</span></code></div>
  </div>
 </div>
  <div class="note" id="124209">  <div class="votes">
    <div id="Vu124209">
    <a href="/manual/vote-note.php?id=124209&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124209">
    <a href="/manual/vote-note.php?id=124209&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124209" title="60% like this...">
    2
    </div>
  </div>
  <a href="#124209" class="name">
  <strong class="user"><em>tharabar at gmail dot com</em></strong></a><a class="genanchor" href="#124209"> &para;</a><div class="date" title="2019-09-19 04:08"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124209">
<div class="phpcode"><code><span class="html">Required to use \007 instead of \a</span></code></div>
  </div>
 </div>
  <div class="note" id="124071">  <div class="votes">
    <div id="Vu124071">
    <a href="/manual/vote-note.php?id=124071&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124071">
    <a href="/manual/vote-note.php?id=124071&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124071" title="58% like this...">
    3
    </div>
  </div>
  <a href="#124071" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124071"> &para;</a><div class="date" title="2019-07-25 03:03"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124071">
<div class="phpcode"><code><span class="html">A non breaking space is not considered as a space and cannot be caught by \s.<br /><br />it can be found with : <br /><br />- [\xc2\xa0] in utf-8<br />- \x{00a0} in unicode</span></code></div>
  </div>
 </div>
  <div class="note" id="122412">  <div class="votes">
    <div id="Vu122412">
    <a href="/manual/vote-note.php?id=122412&amp;page=regexp.reference.escape&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122412">
    <a href="/manual/vote-note.php?id=122412&amp;page=regexp.reference.escape&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122412" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#122412" class="name">
  <strong class="user"><em>Wirek</em></strong></a><a class="genanchor" href="#122412"> &para;</a><div class="date" title="2018-02-20 12:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122412">
<div class="phpcode"><code><span class="html">Note that there are (sometimes difficult to grasp at first glance) nuances of meaning and application of escape sequences like \r, \R and \v - none of them is perfect in all situations, but they are quite useful nevertheless. Some official PCRE control options and their changes come in handy too - unfortunately neither (*ANYCRLF), (*ANY) nor (*CRLF) is documented here on php.net at the moment (although they seem to be available for over 10 years and 5 months now), but they are described on Wikipedia ("Newline/linebreak options" at <a href="https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Perl_Compatible_Regular_Expressions</a>) and official PCRE library site ("Newline convention" at <a href="http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17" rel="nofollow" target="_blank">http://www.pcre.org/original/doc/html/pcresyntax.html#SEC17</a>) pretty well. The functionality of \R appears somehow disappointing (with default configuration of compile time option) according to php.net as well as official description ("Newline sequences" at <a href="https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq" rel="nofollow" target="_blank">https://www.pcre.org/original/doc/html/pcrepattern.html#newlineseq</a>).<br /><br />A hint for those of you who are trying to fight off (or work around at least) the problem of matching a pattern correctly at the end ($) of any line in multiple lines mode (/m).<br /><span class="default">&lt;?php <br /></span><span class="comment">// Various OS-es have various end line (a.k.a line break) chars:<br />// - Windows uses CR+LF (\r\n);<br />// - Linux LF (\n);<br />// - OSX CR (\r).<br />// And that's why single dollar meta assertion ($) sometimes fails with multiline modifier (/m) mode - possible bug in PHP 5.3.8 or just a "feature"(?).<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"ABC ABC\n\n123 123\r\ndef def\rnop nop\r\n890 890\nQRS QRS\r\r~-_ ~-_"</span><span class="keyword">;<br /></span><span class="comment">//          C          3                   p          0                   _<br /></span><span class="default">$pat1</span><span class="keyword">=</span><span class="string">'/\w$/mi'</span><span class="keyword">;    </span><span class="comment">// This works excellent in JavaScript (Firefox 7.0.1+)<br /></span><span class="default">$pat2</span><span class="keyword">=</span><span class="string">'/\w\r?$/mi'</span><span class="keyword">;<br /></span><span class="default">$pat3</span><span class="keyword">=</span><span class="string">'/\w\R?$/mi'</span><span class="keyword">;    </span><span class="comment">// Somehow disappointing according to php.net and pcre.org<br /></span><span class="default">$pat4</span><span class="keyword">=</span><span class="string">'/\w\v?$/mi'</span><span class="keyword">;<br /></span><span class="default">$pat5</span><span class="keyword">=</span><span class="string">'/(*ANYCRLF)\w$/mi'</span><span class="keyword">;    </span><span class="comment">// Excellent but undocumented on php.net at the moment<br /></span><span class="default">$n</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat1</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m1</span><span class="keyword">);<br /></span><span class="default">$o</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat2</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m2</span><span class="keyword">);<br /></span><span class="default">$p</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat3</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m3</span><span class="keyword">);<br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat4</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m4</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">=</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pat5</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$m5</span><span class="keyword">);<br />echo </span><span class="default">$str</span><span class="keyword">.</span><span class="string">"\n1 !!! </span><span class="default">$pat1</span><span class="string"> (</span><span class="default">$n</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n2 !!! </span><span class="default">$pat2</span><span class="string"> (</span><span class="default">$o</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n3 !!! </span><span class="default">$pat3</span><span class="string"> (</span><span class="default">$p</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m3</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n4 !!! </span><span class="default">$pat4</span><span class="string"> (</span><span class="default">$r</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m4</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">)<br />    .</span><span class="string">"\n5 !!! </span><span class="default">$pat5</span><span class="string"> (</span><span class="default">$s</span><span class="string">): "</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$m5</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">// Note the difference among the three very helpful escape sequences in $pat2 (\r), $pat3 (\R), $pat4 (\v) and altered newline option in $pat5 ((*ANYCRLF)) - for some applications at least.<br /><br />/* The code above results in the following output:<br />ABC ABC<br /><br />123 123<br />def def<br />nop nop<br />890 890<br />QRS QRS<br /><br />~-_ ~-_<br />1 !!! /\w$/mi (3): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 0<br />    [2] =&gt; _<br />)<br /><br />2 !!! /\w\r?$/mi (5): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />3 !!! /\w\R?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />) <br /><br />4 !!! /\w\v?$/mi (5): Array<br />(<br />    [0] =&gt; C<br /><br />    [1] =&gt; 3<br />    [2] =&gt; p<br />    [3] =&gt; 0<br />    [4] =&gt; _<br />)<br /><br />5 !!! /(*ANYCRLF)\w$/mi (7): Array<br />(<br />    [0] =&gt; C<br />    [1] =&gt; 3<br />    [2] =&gt; f<br />    [3] =&gt; p<br />    [4] =&gt; 0<br />    [5] =&gt; S<br />    [6] =&gt; _<br />)<br /> */<br /></span><span class="default">?&gt;<br /></span>Unfortunately, I haven't got any access to a server with the latest PHP version - my local PHP is 5.3.8 and my public host's PHP is version 5.2.17.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=regexp.reference.escape&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.escape.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reference.pcre.pattern.syntax.php">PCRE regex syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="regexp.introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.delimiters.php" title="Delimiters">Delimiters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.meta.php" title="Meta-&#8203;characters">Meta-&#8203;characters</a>
                        </li>
                                                <li class="current">
                            <a href="regexp.reference.escape.php" title="Escape sequences">Escape sequences</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.unicode.php" title="Unicode character properties">Unicode character properties</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.anchors.php" title="Anchors">Anchors</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.dot.php" title="Dot">Dot</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.character-classes.php" title="Character classes">Character classes</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.alternation.php" title="Alternation">Alternation</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.internal-options.php" title="Internal option setting">Internal option setting</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.subpatterns.php" title="Subpatterns">Subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.repetition.php" title="Repetition">Repetition</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.back-references.php" title="Back references">Back references</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.assertions.php" title="Assertions">Assertions</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.onlyonce.php" title="Once-&#8203;only subpatterns">Once-&#8203;only subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.conditional.php" title="Conditional subpatterns">Conditional subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.comments.php" title="Comments">Comments</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.recursive.php" title="Recursive patterns">Recursive patterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.performance.php" title="Performance">Performance</a>
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
