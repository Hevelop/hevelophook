# hevelophook
CaptainHook extension adding customized hooks

Thanks for the amazing work made by CaptainHook ( https://github.com/CaptainHookPhp/captainhook ) by sebastianfeldmann!

## Installation

Add the dependency to your `composer.json`:

    {
      ...
      "require-dev": {
        ...
        "davidelunardon/hevelophook": "dev-master",
        ...
      },
      "repositories": [
        ...
        {
          "type": "vcs",
          "url":  "git@github.com:Hevelop/hevelophook.git"
        },
        ...
      ],
      ...
    }

Use *Composer* to install *HevelopHook*.
```bash
    $ composer require --dev Hevelop/hevelophook
```

## Setup
After installing HevelopHook you can use the *hevelophook* executable to create a configuration.
```bash
    $ vendor/bin/hevelophook hevelopconfigure 
```

Now there should be a *captainhook.json* configuration file.

Now you can run the following *captainhook* command.
```bash
    $ vendor/bin/captainhook install
```

Here's an example *captainhook.json* configuration file.
```json
{
  "commit-msg": {
    "enabled": true,
    "actions": [
      {
        "action": "\\CaptainHook\\App\\Hook\\Message\\Action\\Beams",
        "options": []
      }
    ]
  },
  "pre-commit": {
    "enabled": true,
    "actions": [
      {
        "action": "phpunit"
      },
      {
        "action": "phpcs --standard=psr2 src"
      }
    ]
  },
  "pre-push": {
    "enabled": false,
    "actions": []
  }
}
