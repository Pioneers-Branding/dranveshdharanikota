import os
import glob

directory = r"c:\Users\GCV\Desktop\Dr Anvesh"

mapping = {
    "/services/breast-oncoplastic": "/services/breast-cancer-treatment-hyderabad",
    "/services/esophageal-cancer": "/services/esophageal-cancer-treatment-hyderabad",
    "/services/gastric-cancer": "/services/stomach-gastric-cancer-treatment-hyderabad",
    "/services/colorectal-cancer": "/services/colorectal-cancer-treatment-hyderabad",
    "/services/hpb": "/services/hpb-liver-pancreatic-cancer-treatment-hyderabad",
    "/services/lung-cancer": "/services/lung-cancer-treatment-hyderabad",
    "/services/gynecologic-oncology": "/services/gynecologic-cancer-treatment-hyderabad",
    "/services/head-neck-oncology": "/services/head-neck-cancer-treatment-hyderabad",
    "/services/uro-oncology": "/services/urological-cancer-treatment-hyderabad",
    "/services/musculoskeletal-oncology": "/services/bone-cancer-treatment-hyderabad"
}

# Find all PHP and XML files
files = glob.glob(os.path.join(directory, "**", "*.php"), recursive=True) + glob.glob(os.path.join(directory, "*.xml"))

for filepath in files:
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    modified = False
    for old, new in mapping.items():
        if old in content:
            # We want to replace exactly "/services/old" and "/services/old.php" (in case of direct links)
            content = content.replace(f'href="{old}"', f'href="{new}"')
            content = content.replace(f'href="{old}.php"', f'href="{new}.php"')
            content = content.replace(f'{old}</loc>', f'{new}</loc>')
            modified = True
            
    if modified:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)

print("Updated links globally.")
