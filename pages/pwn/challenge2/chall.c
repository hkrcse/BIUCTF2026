#include <stdio.h>

void print_flag() {
    unsigned char enc[] = {
        0x53, 0x44, 0x56, 0x6b,
        0x68, 0x7f, 0x62, 0x4f,
        0x79, 0x63, 0x4f, 0x75,
        0x71, 0x63, 0x69, 0x6d
    };
    unsigned char key = 0x10;

    for (int i = 0; i < sizeof(enc); i++) {
        putchar(enc[i] ^ key);
    }
    putchar('\n');
}

// Explicit declaration to silence compiler warning
char *gets(char *);

int main() {
    char buf[16];
    int is_admin = 0;

    printf("Enter name: ");
    gets(buf);   // ❌ intentional buffer overflow vulnerability

    if (is_admin == 1) {
        print_flag();
    } else {
        printf("Access denied\n");
    }

    return 0;
}
