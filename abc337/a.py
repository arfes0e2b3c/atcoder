def func():
    n = int(input())
    arr = [list(map(int, input().split())) for _ in range(n)]
    sum_x = 0
    sum_y = 0
    for i in range(n):
        x, y = arr[i]
        sum_x += x
        sum_y += y
    if sum_x == sum_y:
        print('Draw')
    elif sum_x > sum_y:
        print('Takahashi')
    else:
        print('Aoki')


if __name__ == '__main__':
    func()
