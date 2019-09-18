# hevelophook
CaptainHook extension adding customized hooks

Thanks for the amazing work made by CaptainHook ( https://github.com/CaptainHookPhp/captainhook ) by sebastianfeldmann!

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
